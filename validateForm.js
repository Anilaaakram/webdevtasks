function validateForm() {
    var name = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var gender = document.getElementById('gender').value;
    var occupation = document.getElementById('occupation').value;
    var idType = document.getElementById('id-type').value;
    var idNumber = document.getElementById('id-number').value;
    var issueAuthority = document.getElementById('issue-authority').value;
    var issueDate = document.getElementById('issue-date').value;
    var issueState = document.getElementById('issue-state').value;
    var expiryDate = document.getElementById('expiry-date').value;

    if (name.trim() === '') {
        alert('Please enter your name');
        return false;
    }

    // Add validation for other fields here

    return true;
}
