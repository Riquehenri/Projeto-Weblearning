const txtName = document.getElementById("username");
const txtEmail = document.getElementById("email");
const txtPassword = document.getElementById("password");

function isName(username) {
  const re =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
  return re.test(username);
}

function isBorn(born) {
  const re = /^\w{4,}@\w{3,}\.\w{2,}{$/;
  return re.test(born);
}

function isDay(day) {
  const re = /^(0?[1-9]|[1-2]\d|3[0-1])$/;
  return re.test(day);
}

function btnSendOnClick() {
  if (txtName.value == "") {
    alert("Preenchimento obrigatório: Nome");
    txtName.focus();

    //else if (!isName(txtName.value)) {
    //    alert('Formato inválido: Dia de Nascimento')
    //    txtDay.value = ""
    //    txtDay.focus()
  } else if (txtEmail.value == "") {
    alert("Preenchimento obrigatório: Nome");
    txtName.focus();
  } else if (!isEmail(txtCEP.value)) {
    alert("Formato inválido: email");
    txtEmail.value = "";
    txtEmail.focus();
  } else {
    form.submit();
  }
}
