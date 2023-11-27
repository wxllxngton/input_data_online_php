function validateForm() {
    // Validate required fields
    var fName = document.forms[0]['f_name'].value;
    var lName = document.forms[0]['l_name'].value;
    var age = document.forms[0]['age'].value;
    var phoneNo = document.forms[0]['phone_no'].value;
    var regNo = document.forms[0]['reg_no'].value;
    var course = document.forms[0]['course'].value;
    var guardianName = document.forms[0]['guardian_name'].value;

    console.log(fName, lName, age, phoneNo, regNo, course, guardianName);

    if (
        fName === '' ||
        lName === '' ||
        age === '' ||
        phoneNo === '' ||
        regNo === '' ||
        course === '' ||
        guardianName === ''
    ) {
        alert('Please fill in all required fields.');
        return false;
    }

    return true;
}
