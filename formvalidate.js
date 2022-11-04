function validate() {
    var firstname = document.contactForm.fname;
    var surname = document.contactForm.surname;
    var dae= document.contactForm.doe;
    var age = document.contactForm.age;
    var gender = document.contactForm.selectGender;

    if (firstname == '') {
        alert('Enter your first name');
        return false;
        
    }
    if (surname == '') {
        alert('Enter your surname');
        return false;
        
    }
    if (dae == '') {
        alert('Enter your date your engagement');
        return false;
    }

    if (age == '') {
        alert('Enter your age');
        return false;
        
    }
    if (i==gender.length) {
        alert('Select a gender');  
        return false;

    }
    return true;
}

console.log('data');