const sidebar = document.getElementById("sidebar");
let isDragging = false;
let offsetX, offsetY;

// Function to handle the start of dragging (Mouse & Touch)
function startDrag(e) {
    isDragging = true;

    let clientX = e.clientX || e.touches[0].clientX;
    let clientY = e.clientY || e.touches[0].clientY;

    offsetX = clientX - sidebar.getBoundingClientRect().left;
    offsetY = clientY - sidebar.getBoundingClientRect().top;

    sidebar.style.transition = "none"; // Remove smooth transition while dragging
}

// Function to handle dragging movement (Mouse & Touch)
function drag(e) {
    if (!isDragging) return;

    let clientX = e.clientX || e.touches[0].clientX;
    let clientY = e.clientY || e.touches[0].clientY;

    let x = clientX - offsetX;
    let y = clientY - offsetY;

    sidebar.style.left = `${x}px`;
    sidebar.style.top = `${y}px`;
}

// Function to stop dragging
function stopDrag() {
    isDragging = false;
    sidebar.style.transition = "all 0.2s ease-in-out"; // Re-add transition after dragging
}

// Mouse Events
sidebar.addEventListener("mousedown", startDrag);
document.addEventListener("mousemove", drag);
document.addEventListener("mouseup", stopDrag);

// Touch Events
sidebar.addEventListener("touchstart", startDrag);
document.addEventListener("touchmove", drag);
document.addEventListener("touchend", stopDrag);



// Toggle sidebar on mobile
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}

function toggleSidebar2() {
    const sidebar = document.getElementById("sidebar");
    const texts = document.querySelectorAll(".sidebar-text");
    const toggleArrow = document.getElementById("toggleArrow");

    if (sidebar.classList.contains("w-[80px]")) {
        sidebar.classList.remove("w-[80px]");
        sidebar.classList.add("w-[200px]");
        texts.forEach(text => text.classList.remove("hidden"));
        toggleArrow.classList.add("rotate-180"); // Rotate arrow
    } else {
        sidebar.classList.remove("w-[200px]");
        sidebar.classList.add("w-[80px]");
        texts.forEach(text => text.classList.add("hidden"));
        toggleArrow.classList.remove("rotate-180"); // Reset arrow rotation
    }
}

function openLogoutModal() {
    document.getElementById('logoutModal').classList.remove('hidden');
}

function closeLogoutModal() {
    document.getElementById('logoutModal').classList.add('hidden');
}

