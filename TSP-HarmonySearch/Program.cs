using System;
using System.Linq;

namespace TSP_HarmonySearch
{
    class Program
    {
        static Random randomizer = new Random();
        const int HMS = 20;
        const double PAR = 0.65;
        const double HMCR = 0.8;
        const int Iter = 5000000;
        static double[] EstetikDegerleri = new double[HMS];

        static int[,] SehirlerArasiUzaklik = new int[,] {
               {0,12,29,22,13,24 },
                {12,0,19,3,25,6 },
                {29,19,0,21,23,28},
                {22,3,21,0,4,5 },
                {13,25,23,4,0,16 },
                {24,6,28,5,16,0 }
            };

        static int[,] SehirlerArasiMesafe1 = new int[,]{
            {0 ,26, 20, 13, 33, 17, 53, 66, 18, 43, 14, 33},
            {26,0 , 38, 39, 60, 17, 76, 89, 12, 62, 40, 57},
            {20,38, 0 , 18, 32, 37, 38, 52, 34, 24, 17, 21},
            {13,39, 18, 0 , 33, 18, 53, 66, 17, 44, 14, 34},
            {33,60, 32, 33, 0 , 50, 28, 39, 51, 34, 20, 18},
            {17,17, 37, 18, 50, 0 , 70, 84, 6 , 61, 31, 52},
            {53,76, 38, 53, 28, 70, 0 , 14, 70, 20, 40, 19},
            {66,89, 52, 66, 39, 84, 14, 0 , 83, 30, 53, 33},
            {18,12, 34, 17, 51, 6 , 70, 83, 0 , 59, 31, 51},
            {43,62, 24, 44, 34, 61, 20, 30, 59,  0, 34, 16},
            {14,40, 17, 14, 20, 31, 40, 53, 31, 34, 0 , 21},
            {33,57, 21, 34, 18, 52, 19, 33, 51, 16, 21, 0 }};

      
        static int[] Sehirler = { 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 };

        const int N = 13;

        static int[][] HarmoniHafiza = new int[HMS][];

        static void Main(string[] args)
        {

            int k = 0;
            int sehir = -1;
            int[] harmoni = Enumerable.Repeat(-1, N).ToArray();

            #region Hafızanın rassal olarak doldurulması
            for (int h = 0; h < HarmoniHafiza.Length; h++)
            {

                for (int i = 0; i < Sehirler.Length; i++)
                {
                    sehir = RassalNotaSec(harmoni);
                    harmoni[i] = sehir;
                }
                harmoni[N - 1] = harmoni[0];
                HarmoniHafiza[h] = harmoni;
                harmoni = Enumerable.Repeat(-1, N).ToArray();
            }

            //Harmoni hafıza sırala
            HarmoniHafizasiEstetikDegerHesapla();
            #endregion

            for (int l = 0; l < Iter; l++)
            {

                //her şehri gez
                int[] hafizadanHarmoni = Enumerable.Repeat(-1, N).ToArray();
                harmoni = Enumerable.Repeat(-1, N).ToArray();

                for (int s = 0; s < Sehirler.Length;)
                {

                    var PHMCR = randomizer.NextDouble();
                    if (PHMCR < HMCR)
                    {
                        //Ton kontrolü
                        var PPAR = randomizer.NextDouble();
                        if (harmoni[s] < 0)
                        {
                            harmoni[s] = HafizadanRassalHarmoniSec(harmoni);
                            if (PPAR < PAR)
                            {
                                k = 0;
                                int temp = -1;

                                var r = RassalNotaSec();
                                sehir = harmoni[r];
                                temp = harmoni[s];
                                harmoni[s] = sehir;
                                harmoni[r] = temp;

                                if (sehir > -1 && temp > -1)
                                {
                                    s++;
                                }
                            }
                            else
                            {
                                s++;
                            }
                        }
                        else
                        {
                            s++;
                        }
                    }
                    else
                    {
                        if (harmoni[s] < 0)
                        {
                            harmoni[s] = RassalNotaSec(harmoni);
                        }
                        s++;
                    }
                  
                }

                harmoni[N - 1] = harmoni[0];
                double maxEstetik = EstetikDegerleri.Max();
               
                var result = HarmoniEstetikDegerHesapla(harmoni);

                if (result < maxEstetik)
                {
                    var ind = Array.IndexOf(EstetikDegerleri, maxEstetik);
                    HarmoniHafiza[ind] = harmoni;
                    EstetikDegerleri[ind] = result;
                    double minEstetik = EstetikDegerleri.Min();
                    Console.WriteLine("Döngü: " + l + " Rota : " + string.Join("-", harmoni) +  
                                      " En Kötü Estetik : "+ maxEstetik + " Bulunan Estetik: " + result + 
                                      " En Iyi Estetik : "+ minEstetik);
                }
            
            }
            var min = EstetikDegerleri.Min();
            var n = Array.IndexOf(EstetikDegerleri, min);
            Console.WriteLine("En iyi deger : " + string.Join("-", HarmoniHafiza[n]) + " Min: " + min);
            Console.ReadKey();
        }
        static void HarmoniHafizasiEstetikDegerHesapla()
        {
            Console.WriteLine("--------------Hafiza-------------------");
            double resultDistance = 0;
            for (int i = 0; i < HarmoniHafiza.Length; i++)
            {

                var harmoni = HarmoniHafiza[i];
                resultDistance = HarmoniEstetikDegerHesapla(harmoni);

                EstetikDegerleri[i] = resultDistance;
                Console.WriteLine("Rota : " + string.Join("-", harmoni) + " Estetik Değeri : " + resultDistance);
                resultDistance = 0;
            }
            Console.WriteLine("-------------------------------------------\n");
        }
        static double HarmoniEstetikDegerHesapla(int[] harmoni)
        {

            double distance = 0;
            int kaynak;
            int hedef;
            for (var j = 0; j < (N - 1); j++)
            {
                kaynak = harmoni[j];
                hedef = harmoni[(j + 1)];
                var d = SehirlerArasiMesafe1[kaynak, hedef];
                distance = distance + d;
            }
            return distance;
        }
        static int RassalNotaSec()
        {
            return randomizer.Next(Sehirler.Length);
        }
        static int RassalNotaSec(int[] harmoni)
        {
            int[] RassalListe = { 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 };
            // Remove all values2 from values1.
            var result = RassalListe.Except(harmoni);

            return result.ElementAtOrDefault(randomizer.Next(result.Count()));
        }

        static int HafizadanRassalHarmoniSec(int[] harmoni )
        {
            var iFromHM = randomizer.Next(0, HMS);//Hafızadan harmoni alınır
            var harmoniHafiza = HarmoniHafiza[iFromHM];
            // Remove all values2 from values1.
            var result = harmoniHafiza.Except(harmoni);

            return result.ElementAtOrDefault(randomizer.Next(result.Count()));
        }

    }
}
