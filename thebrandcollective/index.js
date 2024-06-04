const result = document.getElementById("result");
const randomStringInput = document.getElementById("randomString");

function randString() {
    const characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY";
    const numbers = "0123456789";
    const allCharacters = characters + numbers;
    let randomString = '';

    for (let i = 0; i < 10; i++) {
        const randomIndex = Math.floor(Math.random() * allCharacters.length);
        randomString += allCharacters.charAt(randomIndex);
    }

    result.textContent = randomString;
    randomStringInput.value = randomString;

    const xhr = new XMLHttpRequest();
    xhr.open("GET", "cart.php?randomString=" + randomString, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send();
}
