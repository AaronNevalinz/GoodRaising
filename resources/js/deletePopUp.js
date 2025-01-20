
  const deleteButton = document.querySelector('#deleteButton'); // Replace with your actual delete button selector
  const deletePopup = document.querySelector('#deletePopup');
  const cancelButton = document.querySelector('#cancelButton');
  
  deleteButton.addEventListener('click', () => {
    deletePopup.classList.remove('hidden');
  });

  cancelButton.addEventListener('click', () => {
    deletePopup.classList.add('hidden');
  });

  // Optionally, handle outside click to close
  deletePopup.addEventListener('click', (e) => {
    if (e.target === deletePopup) {
      deletePopup.classList.add('hidden');
    }
  });