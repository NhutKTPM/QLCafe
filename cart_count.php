<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Hàm lấy số lượng sản phẩm từ API
        function updateCartCount() {
            fetch('cart_count_ac.php')
                .then(response => response.json())
                .then(data => {
                    const cartCount = document.getElementById('cartCount');
                    cartCount.textContent = data.count; 
                })
                .catch(error => {
                    console.error('Error fetching cart count:', error);
                });
        }
        updateCartCount();
    });
</script>