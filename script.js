// document.addEventListener('DOMContentLoaded', function () {
//     const table = document.getElementById('dataTable');
//     const searchInput = document.getElementById('searchInput');
//     const paginationContainer = document.getElementById('paginationContainer');

//     function filterTable(searchTerm) {
//         const rows = Array.from(table.getElementsByTagName('tr')).slice(1); // Exclude table header
//         rows.forEach(row => {
//             const name = row.cells[0].textContent.toLowerCase();
//             const age = row.cells[1].textContent.toLowerCase();
//             const email = row.cells[2].textContent.toLowerCase();
//             if (name.includes(searchTerm) || age.includes(searchTerm) || email.includes(searchTerm)) {
//                 row.style.display = '';
//             } else {
//                 row.style.display = 'none';
//             }
//         });
//     }

//     function renderPaginationButtons(totalItems, itemsPerPage) {
//         const numPages = Math.ceil(totalItems / itemsPerPage);
//         let buttonsHtml = '';

//         for (let i = 1; i <= numPages; i++) {
//             buttonsHtml += `<button class="pagination-button" onclick="showPage(${i})">${i}</button>`;
//         }

//         paginationContainer.innerHTML = buttonsHtml;
//     }

//     function showPage(page) {
//         const itemsPerPage = 5;
//         const startIndex = (page - 1) * itemsPerPage;
//         const endIndex = startIndex + itemsPerPage;

//         const rows = Array.from(table.getElementsByTagName('tr')).slice(1); // Exclude table header
//         rows.forEach((row, index) => {
//             if (index >= startIndex && index < endIndex) {
//                 row.style.display = '';
//             } else {
//                 row.style.display = 'none';
//             }
//         });
//     }

//     searchInput.addEventListener('input', function () {
//         filterTable(this.value.toLowerCase());
//         renderPaginationButtons(document.querySelectorAll('#dataTable tbody tr:not([style="display: none;"])').length, 5);
//     });

//     renderPaginationButtons(document.querySelectorAll('#dataTable tbody tr').length, 5);
// });
