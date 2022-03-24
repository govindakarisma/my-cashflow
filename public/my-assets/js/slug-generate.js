function createSlug() {
  const address = document.querySelector("#name").value;
  document.querySelector("#slug").value = generateSlug(address);
}

function generateSlug(text) {
  return text.toString().toLowerCase()
    .replace(/^-+/, '')
    .replace(/-+$/, '')
    .replace(/\s+/g, '-')
    .replace(/\-\-+/g, '-')
    .replace(/[^\w\-]+/g, '');
}