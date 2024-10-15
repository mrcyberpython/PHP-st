const gender = document.querySelector('.gender'),
    genderOther = document.querySelector('.gender-other');

gender.addEventListener('input', () => {
    if (gender.value == 'Other') {
        genderOther.classList.add('gender-other--visible');
        genderOther.setAttribute('name', 'gender');
        gender.removeAttribute('name');
    } else {
        genderOther.classList.remove('gender-other--visible');
        gender.setAttribute('name', 'gender');
        genderOther.removeAttribute('name');
    }
});