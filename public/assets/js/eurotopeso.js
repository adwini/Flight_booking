function convertEuroToPHP() {
    var newtotal = { $total };
    const exchangeRate = 60.36; // exchange rate as of May 3, 2023
    const amountInPHP = newtotal * exchangeRate;
    return amountInPHP.toFixed(2); // round to 2 decimal places
}
