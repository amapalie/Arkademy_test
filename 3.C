#include<stdio.h>

int main()
{
  int hasil=0,bil;
  printf("Masukan Jumalah Orang: ");
  scanf(" %d",&bil);
  int i;
  for(i=1;i<bil;i++)
    {
  hasil=i+hasil;
  }
  printf("Jumlah Jabat Tangan dari %d orang adalah  = %d",bil,hasil);

}                                                                                                                                                                                                                              
