using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TSP_HarmonySearch
{
    class Program
    {
        const int N = 6;
        const int HMS = 10;
        const double PAR = 0.45;
        const double HMCR = 0.95;
        const int Iter = 350;
        static double[] EstetikDegerleri = new double[10];
        static void Main(string[] args)
        {
            Random randomizer = new Random();
            int[] Sehirler = { 0, 1, 2, 3,4,5 };
            int[][] HarmoniHafiza = new int[HMS][];
            int[] harmoni = new int[N] { -1, -1, -1, -1, -1 ,-1};

            #region Hafızanın rassal olarak doldurulması
            for (int h = 0; h < HarmoniHafiza.Length; h++)
            {
                for (int i = 0; i < Sehirler.Length; i++)
                {
                    int sehir = randomizer.Next(Sehirler.Length);
                    while (harmoni.Contains(sehir))
                    {
                        sehir = randomizer.Next(Sehirler.Length);

                    }
                    harmoni[i] = sehir;
                }
                HarmoniHafiza[h] = harmoni;
                harmoni = new int[N] { -1, -1, -1, -1, -1,-1 };
            }

            //Harmoni hafıza sırala
            EstetikDegerHesapla(HarmoniHafiza);
            #endregion

            for (int l = 0; l < Iter; l++)
            {
                int Sehir = -1;
                //her şehri gez
                int[] esinti = new int[N] { -1, -1, -1, -1, -1 ,-1};
                harmoni = new int[N] { -1, -1, -1, -1, -1,-1 };
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
                double val = EstetikDegerleri.Max();
                var result = HarmoniEstetikDegerHesapla(harmoni);

                if (result < val)
                {
                    var ind = Array.IndexOf(EstetikDegerleri, val);
                    HarmoniHafiza[ind] = harmoni;
                    EstetikDegerleri[ind] = result;
                    Console.WriteLine(result);
                }
            }
            var n = Array.IndexOf(EstetikDegerleri, EstetikDegerleri.Min());
            Console.WriteLine("En iyi deger : " + string.Join("-", HarmoniHafiza[n]));
            Console.ReadKey();
        }
        static void EstetikDegerHesapla(int[][] HarmoniHafiza)
        {
            int[,] SehirlerArasiUzaklik = new int[,] {
                {0,12,29,22,13,24 },
                {12,0,19,3,25,6 },
                {29,19,0,21,23,28},
                {22,3,21,0,4,5 },
                {13,25,23,4,0,16 },
                {24,6,28,5,16,0 }
            };
            double distance = 0;
            for (int i = 0; i < HarmoniHafiza.Length; i++)
            {
                var harmoni = HarmoniHafiza[i];
                for (var j = 0; j < (N - 1); j++)
                {
                    var Kaynak = harmoni[j];
                    var Hedef = harmoni[(j + 1)];
                    var d = SehirlerArasiUzaklik[Kaynak, Hedef];
                    distance = distance + d;
                }
                EstetikDegerleri[i] = distance;
                distance = 0;
            }
        }
        static double HarmoniEstetikDegerHesapla(int[] harmoni)
        {
            int[,] SehirlerArasiUzaklik = new int[,] {
               {0,12,29,22,13,24 },
                {12,0,19,3,25,6 },
                {29,19,0,21,23,28},
                {22,3,21,0,4,5 },
                {13,25,23,4,0,16 },
                {24,6,28,5,16,0 }
            };
            double distance = 0;

            for (var j = 0; j < (N-1); j++)
            {
                var Kaynak = harmoni[j];
                var Hedef = harmoni[(j + 1)];
                var d = SehirlerArasiUzaklik[Kaynak, Hedef];
                distance = distance + d;
            }
            return distance;
        }
    }
}
