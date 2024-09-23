document.addEventListener('DOMContentLoaded', function () {
  fetchData();
});

function fetchData() {
  fetch('fetch.php')
    .then((response) => response.json())
    .then((data) => {
      const tableBody = document.getElementById('data-table-body');
      tableBody.innerHTML = ''; // Clear the table body
      data.forEach((item) => {
        const row = document.createElement('tr');
        row.innerHTML = `
                    <td>${item.name}</td>
                    <td>${item.contact}</td>
                    <td>
                        <button class="btn btn-info" onclick="viewEntry(${item.id})">View</button>
                        <button class="btn btn-warning" onclick="updateEntry(${item.id})">Update</button>
                        <button class="btn btn-danger" onclick="deleteEntry(${item.id})">Delete</button>
                    </td>
                `;
        tableBody.appendChild(row);
      });
    })
    .catch((error) => console.error('Error fetching data:', error));
}

function showCreateDialog() {
  $('#createModal').modal('show');
}

function createEntry() {
  const name = $('#createName').val();
  const contact = $('#createContact').val();

  fetch('fetch.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `name=${encodeURIComponent(name)}&contact=${encodeURIComponent(
      contact
    )}`,
  })
    .then((response) => {
      $('#createModal').modal('hide');
      fetchData(); // Refresh the data table
    })
    .catch((error) => console.error('Error creating entry:', error));
}

// To be implemented functions for View, Update, and Delete
function viewEntry(id) {
  alert(`Viewing entry with ID: ${id}`);
}

function updateEntry(id) {
  alert(`Updating entry with ID: ${id}`);
}

function deleteEntry(id) {
  alert(`Deleting entry with ID: ${id}`);
}
