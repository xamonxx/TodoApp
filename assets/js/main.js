// Fungsi untuk mengubah tema
function setTheme(theme) {
  document.documentElement.setAttribute('data-theme', theme);
  localStorage.setItem('theme', theme); // Simpan tema yang dipilih
}

// Memuat tema yang tersimpan di localStorage saat halaman dimuat
window.onload = function () {
  const savedTheme = localStorage.getItem('theme') || 'default'; // Tema default jika tidak ada yang disimpan
  setTheme(savedTheme); // Terapkan tema yang tersimpan

  // Set input radio yang dipilih sesuai tema yang tersimpan
  const themeRadio = document.querySelector(`input[value="${savedTheme}"]`);
  if (themeRadio) {
    themeRadio.checked = true;
  }

  // Event listener untuk setiap radio button
  const themeControllers = document.querySelectorAll('.theme-controller');
  themeControllers.forEach((controller) => {
    controller.addEventListener('change', (e) => {
      setTheme(e.target.value);
    });
  });
};

// Fungsi untuk menandai tugas sebagai selesai atau belum selesai
function toggleStatus(id, currentStatus) {
  let newStatus = (currentStatus === 'completed') ? 'pending' : 'completed';

  fetch(`../auth/update_status.php?id=${id}&status=${newStatus}`)
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        let title = document.getElementById(`title-${id}`);
        let date = document.getElementById(`task-${id}-date`);
        let description = document.getElementById(`description-${id}`);
        let btn = document.getElementById(`btn-${id}`);

        if (newStatus === 'completed') {
          title.innerHTML = `<del>${title.textContent}</del>`;
          date.innerHTML = `<del>${date.textContent}</del>`;
          description.innerHTML = `<del>${description.textContent}</del>`;
btn.innerHTML = `
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
       class="size-6 animate__animated animate__heartBeat">
    <path fill-rule="evenodd"
          d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
          clip-rule="evenodd" />
  </svg>`;
          btn.setAttribute("onclick", `toggleStatus(${id}, 'completed')`);
        } else {
          title.innerHTML = title.textContent.replace(/<\/?del>/g, '');
          date.innerHTML = date.textContent.replace(/<\/?del>/g, '');
          description.innerHTML = description.textContent.replace(/<\/?del>/g, '');
          btn.innerHTML = `
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
       class="size-6 animate__animated animate__heartBeat ">
    <path fill-rule="evenodd"
          d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
          clip-rule="evenodd" />
  </svg>`;
          btn.setAttribute("onclick", `toggleStatus(${id}, 'pending')`);
        }
      }
    })
    .catch(error => console.error('Error:', error));
}

document.addEventListener("DOMContentLoaded", function () {
  // Ambil semua tombol edit
  const editButtons = document.querySelectorAll(".edit-btn");

  editButtons.forEach(button => {
    button.addEventListener("click", function () {
      const id = this.getAttribute("data-id");
      const judul = this.getAttribute("data-judul");
      const deskripsi = this.getAttribute("data-deskripsi");

      document.getElementById("update_id").value = id;
      document.getElementById("update_judul").value = judul;
      document.getElementById("update_deskripsi").value = deskripsi;
    });
  });

  // AJAX untuk submit form update
  document.getElementById("updateForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("../auth/proses_update.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.json())
      .then(result => {
        const status = result.status;
        const message = result.message;
        window.location.href = `../app/index.php?status=${status}&message=${encodeURIComponent(message)}`;
      })
      .catch(error => console.error("Error:", error));
  });
});

function togglePin(id, isPinned) {
  fetch('../auth/proses_pin.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `id_todo=${id}&pinned=${isPinned ? 0 : 1}`
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const task = document.querySelector(`[data-id='${id}']`);
        task.classList.toggle('pinned-task', !isPinned);

        const pinIcon = task.querySelector('.pin-icon');
        pinIcon.setAttribute('fill', isPinned ? 'gray' : 'yellow');
      } else {
        alert('Gagal memperbarui status pin.');
      }
    })
    .catch(error => console.error('Error:', error));
};

document.querySelectorAll('.pin-btn').forEach(button => {
  button.addEventListener('click', function () {
    const taskId = this.getAttribute('data-id');
    const isPinned = this.getAttribute('data-pinned') === "1" ? 0 : 1;

    fetch('../auth/proses_pin.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: `id_todo=${taskId}&pinned=${isPinned}`
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          window.location.reload();
        } else {
          alert('Gagal memperbarui status pin!');
        }
      });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.querySelector("input[type='text'][placeholder='Search']");
  const todoCards = document.querySelectorAll(".todo");

  searchInput.addEventListener("input", function () {
    const searchTerm = searchInput.value.toLowerCase();

    todoCards.forEach(card => {
      const title = card.querySelector(".todo-text").textContent.toLowerCase();
      const description = card.querySelector("p.mb-4").textContent.toLowerCase();

      if (title.includes(searchTerm) || description.includes(searchTerm)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});

// function createSnowflake() {
//   const snowflake = document.createElement("div");
//   snowflake.innerHTML = "❄";
//   snowflake.classList.add("snowflake");
// 
//   snowflake.style.left = Math.random() * 100 + "vw";
//   snowflake.style.animationDuration = Math.random() * 5 + 5 + "s";
//   snowflake.style.fontSize = Math.random() * 5 + 15 + "px";
// 
//   document.body.appendChild(snowflake);
// 
//   setTimeout(() => {
//     snowflake.remove();
//   }, 5000);
// };
// 
// setInterval(createSnowflake, 200);

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    window.history.replaceState({}, document.title, window.location.pathname);
  }, 1000);
});