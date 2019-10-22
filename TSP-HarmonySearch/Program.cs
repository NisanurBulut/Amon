using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TSP_HarmonySearch
{
    class Program
    {

        const int HMS = 10;
        const double PAR = 0.45;
        const double HMCR = 0.95;
        const int Iter = 105000;
        static double[] EstetikDegerleri = new double[10];
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

        const int N = 12;

        static void Main(string[] args)
        {
            Random randomizer = new Random();
            int[] Sehirler = { 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 };
            int[][] HarmoniHafiza = new int[HMS][];
            int[] harmoni = Enumerable.Repeat(-1, N).ToArray();
            
            #region Hafızanın rassal olarak doldurulması
            for (int h = 0; h < HarmoniHafiza.Length; h++)
            {
                for (int i = 0; i < Sehirler.Length; i++)
                {
                    int sehir = -1;
                    do
                    {
                        sehir = randomizer.Next(Sehirler.Length);
                        harmoni[i] = sehir;
                        sehir = randomizer.Next(Sehirler.Length);
                    }while(harmoni.Contains(sehir));

                }
                harmoni[N - 1] = harmoni[0];
                HarmoniHafiza[h] = harmoni;
                harmoni = Enumerable.Repeat(-1, N).ToArray();
            }

            //Harmoni hafıza sırala
            EstetikDegerHesapla(HarmoniHafiza);
            #endregion

            for (int l = 0; l < Iter; l++)
            {
                int Sehir = -1;
                //her şehri gez
                int[] esinti = Enumerable.Repeat(-1, N).ToArray();
                harmoni = Enumerable.Repeat(-1, N).ToArray();
                for (int s = 0; s < Sehirler.Length; s++)
                {
                    var PHMCR = randomizer.NextDouble();
                    if (PHMCR < HMCR)
                    {
                        do
                        {
                            var iFromHM = randomizer.Next(0, HMS);
                            esinti = HarmoniHafiza[iFromHM];
                            var t = randomizer.Next(0, N);
                            Sehir = esinti[t];
                            harmoni[s] = Sehir;
                        } while (harmoni.Where(a => a == Sehir).Count() > 1);

                        //Ton kontrolü
                        var PPAR = randomizer.NextDouble();
                        if (PPAR < PAR)
                        {
                            //Komşularından biriyle değiştir

                            var r = randomizer.Next(0, N);
                            var sehir = harmoni[r];
                            var temp = harmoni[s];
                            if (sehir > -1 && temp > -1)
                            {
                                harmoni[s] = sehir;
                                harmoni[r] = temp;
                            }

                        }
                    }
                    else
                    {
                        //sehri rassal seç
                        //Komşularından biriyle değiştir
                        int yeniSehir = -1;
                        do
                        {
                            var iFromHM = randomizer.Next(0, HMS);
                            esinti = HarmoniHafiza[iFromHM];
                            var ir = randomizer.Next(0, N);//rassal secilecek sherin indexi
                            yeniSehir = esinti[ir];
                            harmoni[s] = esinti[ir];
                        } while (harmoni.Where(a => a == yeniSehir).Count() > 1);

                    }
                }
                harmoni[N - 1] = harmoni[0];
                double val = EstetikDegerleri.Max();
                var result = HarmoniEstetikDegerHesapla(harmoni);

                if (result < val)
                {
                    var ind = Array.IndexOf(EstetikDegerleri, val);
                    HarmoniHafiza[ind] = harmoni;
                    EstetikDegerleri[ind] = result;
                    Console.WriteLine("Rota : " + string.Join("-", HarmoniHafiza[ind]) + " Estetik: " + result);
                }
            }
            var min = EstetikDegerleri.Min();
            var n = Array.IndexOf(EstetikDegerleri, min);
            Console.WriteLine("En iyi deger : " + string.Join("-", HarmoniHafiza[n]) + " Min: " + min);
            Console.ReadKey();
        }
        static void EstetikDegerHesapla(int[][] HarmoniHafiza)
        {

            double distance = 0;
            for (int i = 0; i < HarmoniHafiza.Length; i++)
            {
                var harmoni = HarmoniHafiza[i];
                for (var j = 0; j < (N - 1); j++)
                {
                    var Kaynak = harmoni[j];
                    var Hedef = harmoni[(j + 1)];
                    var d = SehirlerArasiMesafe1[Kaynak, Hedef];
                    distance = distance + d;
                }
                EstetikDegerleri[i] = distance;
                distance = 0;
            }
        }
        static double HarmoniEstetikDegerHesapla(int[] harmoni)
        {

            double distance = 0;

            for (var j = 0; j < (N - 1); j++)
            {
                var Kaynak = harmoni[j];
                var Hedef = harmoni[(j + 1)];
                var d = SehirlerArasiMesafe1[Kaynak, Hedef];
                distance = distance + d;
            }
            return distance;
        }
    }
}
