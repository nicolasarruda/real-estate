function getSearchRenterValue() {
  const searchActionValue = document.getElementById('searchRenterId').value;
  console.log(searchActionValue);
  return searchActionValue == '' ? 0 : searchActionValue;
}

function getSearchOwnerValue() {
  const searchActionValue = document.getElementById('searchOwnerId').value;
  console.log(searchActionValue);
  return searchActionValue == '' ? 0 : searchActionValue;
}

function getCancelValue() {
  const cancelActionValue = document.getElementById('cancelAction').value;
  console.log(cancelActionValue);
  return cancelActionValue;
}
