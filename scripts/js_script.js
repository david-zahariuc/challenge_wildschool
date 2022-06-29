
let nom = document.getElementById('name');
let erreurNom = document.getElementById('msgErreur');
let form = document.getElementsByTagName('form')[0];
let nomRegExp = new RegExp("^[A-Z][A-Za-z' ,!]{2,35}$");

nom.addEventListener('input', function (event) {
    if (nom.validity.valid  && nomRegExp.test(nom.value)) {
        erreurNom.textContent = '';
    } else {
        afficherErreur ();
  }
});

form.addEventListener('submit', function (event) {
    if(!(nomRegExp.test(nom.value)) || !nom.validity.valid) {
        event.preventDefault();

        afficherErreur ();
    }
  });

  function afficherErreur () {
    let exp1 = new RegExp("^.{0}[A-Z]");
    let exp2 = new RegExp("(?=.*?[0-9])");
    let exp3 = new RegExp(".{3,}");
    let message = "";
    if(nom.validity.valueMissing) {
        message += 'Veuillez insérer le nom de l\'argonaute.';
    }
     else if(!(exp1.test(nom.value))) {
        message += 'On écrit avec une majuscule les noms des Argonautes';
    } else if(exp2.test(nom.value)) {
        message += 'Le nom ne doit pas contenir des chiffres';
    } else if (!exp3.test(nom.value)) {
        message += 'Le nom doit contenir au minimum 3 caractères';
    } else {
        message += 'Le nom ne doit pas contenir des caractères speciaux';
    };
    erreurNom.innerHTML = message;
}