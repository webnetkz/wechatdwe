function validatePhone(elem) {
    if(elem.value.length > 18) {
        elem.value = '+7 (';
    }
    if(elem.value.length === 7) {
        elem.value += ') '
    }
    if(elem.value.length === 12) {
        elem.value += '-'
    }
    if(elem.value.length === 15) {
        elem.value += '-'
    }
}
