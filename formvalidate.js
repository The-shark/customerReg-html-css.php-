var firstname = document.contactForm.fname.value;
var surname = document.contactForm.surname.value;
var dae = document.contactForm.doe.value;
var age = document.contactForm.age.value;
var gender = document.contactForm.gender.value;

function validate() {
   
    if (firstname == '') {
        alert('Enter your first name');
        document.contactForm.fname.focus();
        
    }
    if (surname == '') {
        alert('Enter your surname');
        document.contactForm.surname.focus();

        
    }
    if (dae == '') {
        alert('Enter your date your engagement');
        document.contactForm.doe.focus();

    }

    if (age == '') {
        alert('Enter your age');
        document.contactForm.age.focus();

        
    }
    if (i == gender.length) {
        alert('Select a gender');
        document.contactForm.gender.focus();


    }
}
function setOfAge(){
    var ofAge = document.contactForm.ofAge.value;

    if (age < 18) {
       ofAge='Minor';
    } else {
        ofAge = 'Adult';
    }

}