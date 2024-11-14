let deleteId = null;

// عرض نافذة التأكيد
function confirmDelete(id) {
    deleteId = id; // حفظ المعرف
    $('#deleteModal').modal('show'); // عرض النافذة
}


document.getElementById('confirmDeleteButton').onclick = function () {
    deleteRecord(deleteId); // استدعاء وظيفة الحذف
};

// وظيفة الحذف باستخدام Ajax
function deleteRecord(id) {
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: '/delete/' + id,
        type: 'GET', 
        success:function(response){
            location.reload();
        }
        
    });
}