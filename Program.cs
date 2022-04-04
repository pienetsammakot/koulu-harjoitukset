Console.WriteLine("Jonathan Haavisto");
Console.WriteLine("Teht 11");
Console.WriteLine("--------------------");
Console.WriteLine();

List<int> luvut = new List<int>();

for(int i = 0; i < 5; i++)
{
    Console.Write("Listan " + (i + 1) + ". luku? ");
    luvut.Add(Convert.ToInt32(Console.ReadLine()));
    Console.WriteLine();
}

for(int i = 0; i < 5; i++)
{
    Console.WriteLine(luvut[i]);
}