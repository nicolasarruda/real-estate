function generateToken() {
  const token = 0;
  return token;
}

let token = md5(uniqid(mt_rand(), true));

function showToken() {
  let token = generateToken();
  document.getElementById('token').innerHTML = token;
}
