<?php

declare(strict_types=1);

/*
========================================
    PROCVIČOVÁNÍ ZÁKLADŮ PHP
    2. ročník – funkce, podmínky, cykly
========================================

Instrukce:
- Každý úkol řešte úpravou příslušné funkce.
- Neměňte názvy funkcí ani parametry.
- U každé funkce dole vytvořte alespoň 2 testovací volání.
- Používejte typové deklarace.
- Pište přehledný a odsazený kód.
*/


/*
----------------------------------------
1) Sudé nebo liché číslo
----------------------------------------
Vraťte true, pokud je číslo sudé.
Vraťte false, pokud je liché.
Použijte operátor %.
*/
function jeSude(int $cislo): bool
{
	if ($cislo % 2 == 0)
		return true;
	else
		return false;
		// TODO: Doplňte řešení
}


/*
----------------------------------------
2) Kalkulačka
----------------------------------------
Operace může být:
"+", "-", "*", "/"

Pokud dojde k dělení nulou,
vraťte text: "Nelze dělit nulou"
*/
function kalkulacka(float $a, float $b, string $operace): float|string
{
	print("Vyber operaci");
	switch ($operace){
		case '+':
			return $a + $b;
		case '-':
			return $a - $b;
		case '*':
			return $a * $b;
		case '/':
			if ($b == 0.0)
				print("Nelze dělit nulou");
			else
				return $a / $b;
	}
	
	// TODO: Doplňte řešení
}


/*
----------------------------------------
3) Největší ze tří čísel
----------------------------------------
Vraťte největší číslo.
Nepoužívejte funkci max().
*/
function nejvetsi(int $a, int $b, int $c): int
{
	$max = $a;
	if ($max < $b)
		$max = $b;
	if ($max < $c)
		$max = $c;
	return $max;
	
	// TODO: Doplňte řešení
}


/*
----------------------------------------
4) Součet čísel od 1 do N
----------------------------------------
Spočítejte součet čísel od 1 do $n
pomocí cyklu.
*/
function soucetDoN(int $n): int
{
	$soucet = 0;
	for ($i=1; $i <= $n; $i++)
		$soucet = $soucet + $i;
	return $soucet;
}


/*
----------------------------------------
5) Faktoriál čísla
----------------------------------------
Např.:
5! = 5 × 4 × 3 × 2 × 1 = 120

Bonus:
Ošetřete záporné číslo.
*/
function faktorial(int $n): int
{
	$soucin = 1;
	if ($n < 0)
		return 0;
	else
		for ($i = 1; $i <= $n; $i++)
			$soucin = $soucin * $i;
	return $soucin;
	// TODO: Doplňte řešení
}


/*
----------------------------------------
6) Počet sudých čísel v poli
----------------------------------------
Spočítejte, kolik sudých čísel je v poli.
Použijte foreach.
*/
function pocetSudyChCisel(array $pole): int
{
	$pocet = 0;
	foreach ($pole as $cislo){
		if ($cislo % 2 == 0)
			$pocet++;
	}
	return $pocet;
	// TODO: Doplňte řešení
}


/*
----------------------------------------
7) Je student přijat?
----------------------------------------
Podmínky:
- Součet bodů alespoň 60
- Z testu alespoň 25 bodů

Použijte logické operátory.
*/
function jePrijat(int $bodyTest, int $bodyUstni): bool
{
	$celkem = $bodyTest + $bodyUstni;
	if ($bodyTest >= 25 && $celkem >= 60 )
		return true;
	else
		return false;
	// TODO: Doplňte řešení
}


/*
----------------------------------------
8) Násobilka
----------------------------------------
Vypište násobilku čísla od 1 do 10.
Použijte cyklus for.

Příklad pro 5:
5 x 1 = 5
5 x 2 = 10
...
*/
function nasobilka(int $cislo): void
{
	for ($i = 1; $i < 11; $i++)
		echo ("$cislo * $i = " . ($cislo * $i) . "\n");

	// TODO: Doplňte řešení
}


/*
----------------------------------------
9) Obrácení textu
----------------------------------------
Vraťte text pozpátku.
Nepoužívejte strrev().
*/
function obratText(string $text): string
{
    $vysledek = "";
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $vysledek .= $text[$i];
    }
    return $vysledek;
}


/*
----------------------------------------
10) Hádání čísla
----------------------------------------
Vraťte:
"Uhodl jsi!"
"Moc malé"
"Moc velké"
*/
function zkontrolujTip(int $tajneCislo, int $tip): string
{
    if ($tip === $tajneCislo) {
        return "Uhodl jsi!";
    } elseif ($tip < $tajneCislo) {
        return "Moc malé";
    } else {
        return "Moc velké";
    }
}// TODO: Doplňte řešení



/*
----------------------------------------
BONUS (pokud zbyde čas)
----------------------------------------
Zjistěte, zda je číslo prvočíslo.
*/
function jePrvocislo(int $n): bool
{
    if ($n < 2) {
        return false;
    }

    // Stačí testovat do odmocniny z $n, ale pro jednoduchost jdeme do $n - 1
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false; // Našli jsme dělitele, končíme
        }
    }

    return true; // Žádný dělitel nenalezen, je to ono
}
/*
========================================
TESTOVACÍ VOLÁNÍ
(Odkomentujte po dokončení funkcí)
========================================

// var_dump(jeSude(4));
// var_dump(jeSude(7));

// var_dump(kalkulacka(10, 5, "+"));
// var_dump(kalkulacka(10, 0, "/"));

// var_dump(nejvetsi(5, 9, 3));

// var_dump(soucetDoN(5));

// var_dump(faktorial(5));

// var_dump(pocetSudyChCisel([1,2,3,4,6]));

// var_dump(jePrijat(30, 35));
// var_dump(jePrijat(20, 40));

// nasobilka(5);

// var_dump(obratText("PHP"));

// var_dump(zkontrolujTip(50, 30));
// var_dump(zkontrolujTip(50, 50));

// var_dump(jePrvocislo(7));

*/

var_dump
