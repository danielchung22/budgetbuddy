
// JavaScript for Data Tables and Data Update/Delete in entry.php

    jQuery(document).ready(function($) {
        $('#datatableid').DataTable();
    });

    // Script for Updating How Many Results Appear
    function updateStep(input) {
        const value = parseFloat(input.value);
        const remainder = value % 10;
        input.step = remainder !== 0 ? '10' : 'any';
    }

    $(document).ready(function () {
        // Event Handler for Delete Button
        $('#datatableid').on('click', '.deletebtn', function () {
            $('#deletemodal').modal('show');
            var $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_id').val(data[0]);
        });

        // Event Handler for Edit Button
        $('#datatableid').on('click', '.editbtn', function () {
            $('#editmodal').modal('show');
            var $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_id').val(data[0]);
            $('.date').val(data[1]);
            $('#amount').val(data[2]);
            var selectedCategory = $tr.find("td[data-category]").data("category");
            $('#editmodal select[name="category"]').val(selectedCategory);
            $('.description').val(data[4]);
        });
    });