var reset = function (form) {
  form['userName'].value = '';
  form['password'].value = '';
  form['lightSabers'].value = '';
  form['robes'].value = '';
  form['appendages'].value = '';
  form['sevenDay'].checked = false;
  form['overNight'].checked = false;
  form['threeDay'].checked = false;
};

var validateForm = function (form) {
  var userNameInput = form['userName'].value;
  var passwordInput = form['password'].value;
  var lightSaberInput = form['lightSabers'].value;
  var robesInput = form['robes'].value;
  var appendagesInput = form['appendages'].value;
  var sevenDayShipping = form['shipping'][0].checked;
  var overNightShipping = form['shipping'][1].checked;
  var threeDayShipping = form['shipping'][2].checked;

  var errorsFound = false;
  var errorString = '';
  var splitUser = userNameInput.split('@');

  if (userNameInput === null || userNameInput === '' || userNameInput === undefined) {
      errorString += 'Invalid user name. Must be of the form name@domain.com.\n';
      errorsFound = true;
  } else if (splitUser.length === 1 || splitUser.length > 2) {
      errorString += 'Invalid user name. Must be of the form name@domain.com.\n';
      errorsFound = true;
  } else {
    var splitDoman = splitUser[1].split('.');
    if (splitDoman.length === 1 || splitDoman.length > 2) {
      errorString += 'Invalid user name. Must be of the form name@domain.com.\n';
      errorsFound = true;
    }
  }

  if (passwordInput === null || passwordInput === '' || lightSapasswordInputberInput === undefined) {
        errorString += 'Invalid password. Password was left blank.\n'
        errorsFound = true;
  }

  if (lightSaberInput === null || lightSaberInput === '' || lightSaberInput === undefined ||
      isNaN(parseInt(lightSaberInput)) ||   parseInt(lightSaberInput) < 0) {
        errorString += 'Invalid quantity of lightsabers.\n'
        errorsFound = true;
  }

  if (robesInput === null || robesInput === '' || robesInput === undefined ||
      isNaN(parseInt(robesInput)) ||   parseInt(robesInput) < 0) {
        errorString += 'Invalid quantity of robes.\n'
        errorsFound = true;
  }

  if (appendagesInput === null || appendagesInput === '' || appendagesInput === undefined ||
      isNaN(parseInt(appendagesInput)) ||   parseInt(appendagesInput) < 0) {
        errorString += 'Invalid quantity of appendages.\n'
        errorsFound = true;
  }

  if (!(sevenDayShipping || overNightShipping || threeDayShipping)) {
    errorString += 'No shipping method was selected.\n';
    errorsFound = true;
  }

  if (errorsFound) {
    alert(errorString);
    return false;
  }

  return true;
};
