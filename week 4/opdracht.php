function vulArrayMetCijfers($aantalCijfers) {
    // Controleren of het opgegeven aantal cijfers minimaal 5 is
    if ($aantalCijfers < 5) {
        echo "Het aantal cijfers moet minimaal 5 zijn.";
        return;
    }

    $cijfers = array();

    // Vullen van de array met cijfers
    for ($i = 0; $i < $aantalCijfers; $i++) {
        $willekeurigCijfer = rand(1, 100); // Genereer een willekeurig cijfer tussen 1 en 100
        array_push($cijfers, $willekeurigCijfer); // Voeg het cijfer toe aan de array
    }

    return $cijfers;
}

// Voorbeeldgebruik van de functie
$aantalCijfers = 10; // Het gewenste aantal cijfers
$cijfersArray = vulArrayMetCijfers($aantalCijfers);

// Output van de resulterende array
print_r($cijfersArray);
