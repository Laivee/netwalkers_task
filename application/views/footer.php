
</main>

</div>
<!-- Footer -->

<script src="<?php echo base_url('public/js/list_post_scripts.js'); ?>"></script>
<script src="<?php echo base_url('public/js/list_post_prospects.js'); ?>"></script>
<script src="<?php echo base_url('public/js/add_blog1.js'); ?>"></script>
<script src="<?php echo base_url('public/js/add_blog2.js'); ?>"></script>
<script>
    // wrapper funtionalities
document.addEventListener('DOMContentLoaded', function() {
// Navigation functionality
const navLinks = document.querySelectorAll('.nav-item2 a');

navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Remove active class from all links
        navLinks.forEach(l => l.parentElement.classList.remove('active2'));
        
        // Add active class to clicked link with animation
        this.parentElement.classList.add('active2');
    });
});

// Mock API data for suggestions
const mockData = [
    "Amazing blog post about technology",
    "Best practices in web development",
    "Creative design patterns",
    "Digital marketing strategies",
    "Effective communication skills",
    "Future of artificial intelligence",
    "Growth hacking techniques",
    "How to improve productivity",
    "Innovation in tech industry",
    "JavaScript frameworks comparison",
    "Knowledge management systems",
    "Leadership in remote teams",
    "Modern web architecture",
    "Next generation computing",
    "Optimization techniques",
    "Programming best practices",
    "Quality assurance in software",
    "React vs Vue comparison",
    "Software development lifecycle",
    "Testing methodologies"
];

// Suggestions functionality
const searchInput = document.getElementById('searchInput2');
const suggestionsContainer = document.createElement('div');
suggestionsContainer.className = 'suggestions2';
document.querySelector('.filter-table2').appendChild(suggestionsContainer);

function showSuggestions(suggestions) {
    suggestionsContainer.innerHTML = '';
    suggestions.forEach(suggestion => {
        const div = document.createElement('div');
        div.className = 'suggestion-item2';
        div.textContent = suggestion;
        div.addEventListener('click', () => {
            searchInput.value = suggestion;
            hideSuggestions();
            filterTable(suggestion.toLowerCase());
        });
        suggestionsContainer.appendChild(div);
    });
    suggestionsContainer.classList.add('show');
}

function hideSuggestions() {
    suggestionsContainer.classList.remove('show');
}

function filterSuggestions(searchTerm) {
    return mockData.filter(item => 
        item.toLowerCase().includes(searchTerm.toLowerCase())
    );
}

function filterTable(searchTerm) {
    const tableRows = document.querySelectorAll('#blogTable2 tbody tr');
    
    tableRows.forEach(row => {
        const titleCategory = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        const titleViews = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        
        if (titleCategory.includes(searchTerm) || titleViews.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

searchInput.addEventListener('focus', () => {
    showSuggestions(mockData);
});

searchInput.addEventListener('input', () => {
    const searchTerm = searchInput.value;
    const filteredSuggestions = filterSuggestions(searchTerm);
    showSuggestions(filteredSuggestions);
    filterTable(searchTerm.toLowerCase());
});

document.addEventListener('click', (e) => {
    if (!searchInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
        hideSuggestions();
    }
});

// Modal functionality
const deleteButtons = document.querySelectorAll('.delete-btn2');
const confirmModal = document.getElementById('confirmModal2');
const noBtn = document.getElementById('noBtn2');
const yesBtn = document.getElementById('yesBtn2');

function showModal() {
    confirmModal.style.display = 'flex';
    requestAnimationFrame(() => {
        confirmModal.classList.add('show');
    });
}

function hideModal() {
    confirmModal.classList.remove('show');
    setTimeout(() => {
        confirmModal.style.display = 'none';
    }, 300);
}

deleteButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        showModal();
    });
});

noBtn.addEventListener('click', hideModal);
yesBtn.addEventListener('click', hideModal);

window.addEventListener('click', (e) => {
    if (e.target === confirmModal) {
        hideModal();
    }
});

// Search button functionality
const searchBtn = document.getElementById('searchBtn2');
searchBtn.addEventListener('click', () => {
    const startDate = document.getElementById('startDate2').value;
    const endDate = document.getElementById('endDate2').value;
    const category = document.getElementById('category2').value;
    
    console.log('Filters:', { startDate, endDate, category });
});

// Add Post button functionality
const addPostBtn = document.getElementById('addPostBtn2');
addPostBtn.addEventListener('click', () => {
    console.log('Add Post button clicked');
});
});
</script>
</body>
</html>