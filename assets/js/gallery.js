document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.gallery-item');

    items.forEach(item => {
        item.addEventListener('click', () => {
            const wasExpanded = item.classList.contains('expanded');
            item.classList.toggle('expanded');

            if (!wasExpanded) {
                item.scrollIntoView({ behavior: 'auto', block: 'nearest' });
            }
        });
    });
});