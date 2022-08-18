//Käyttäjää pyydetään syöttämään kokonaisluku.
//Jos luku on esim. 12, ohjelma tulostaa luvun ensin 12 kertaa välilyönneillä, 12 kertaa ilman väliyöntejä, ja tekee nämä molemmat 12 kertaa.

int luku;
alku:

try
{
    Console.WriteLine("Anna kokonaisluku:");
    luku = int.Parse(Console.ReadLine());
}
catch (Exception ex)
{
    Console.WriteLine(ex.Message);
    Console.WriteLine("Syöte ei ole kokonaisluku. Yritä uudelleen!");
    goto alku;
}
for(int i = 1; i <= luku; i++)
{
    for(int j = 1; j <= luku; j++)
    {
        Console.Write(luku + " ");
    }
    Console.WriteLine("");
    for(int k = 1; k <= luku; k++)
    {
        Console.Write(luku);
    }
    Console.WriteLine("");
}