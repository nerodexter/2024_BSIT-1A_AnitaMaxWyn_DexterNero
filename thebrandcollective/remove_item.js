function removeItem(itemId) {
    if (confirm("Are you sure you want to remove this item?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "cart_process.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                window.location.reload(); 
            }
        };
        xhr.send("id=" + itemId);
    }
}
