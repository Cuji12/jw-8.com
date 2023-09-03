import './bootstrap';

// Define global data
Alpine.data('dropdown', () => ({
    open: false,

    toggle() {
        this.open = ! this.open
    }
}))
