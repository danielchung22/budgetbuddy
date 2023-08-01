
<!-- PHP for Calculating Values for cardarray.php to be displayed in the Card Swiper -->

<?php
// Database connection
include 'include/config.php';

function getNumberOfDataEntries() {
    global $connection;

    // Query to get the number of records in the 'expense record' table
    $query = "SELECT COUNT(*) AS num_entries FROM `expense record`";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $num_entries = $row['num_entries'];

        // Free the result set
        mysqli_free_result($result);

        return $num_entries;
    } else {
        // Return 0 if there was an error
        return 0;
    }
}

function getTotalExpenses() {
    global $connection;

    // Query to get the total expenses from the 'expense record' table
    $query = "SELECT SUM(amount) AS total_amount FROM `expense record`";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $total_expenses = floatval($row['total_amount']);

        // Free the result set
        mysqli_free_result($result);

        return $total_expenses;
    } else {
        // Return 0 if there was an error
        return 0;
    }
}

function getAverageExpensePerTransaction() {
    $totalExpenses = getTotalExpenses();
    $numEntries = getNumberOfDataEntries();

    if ($numEntries > 0) {
        return $totalExpenses / $numEntries;
    } else {
        return 0;
    }
}

function getHighestSpendingCategory() {
    global $connection;

    // Query to get the highest spending category
    $query = "SELECT category, SUM(amount) AS total_amount FROM `expense record` GROUP BY category ORDER BY total_amount DESC LIMIT 1";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $highest_spending_category = $row['category'];

        // Free the result set
        mysqli_free_result($result);

        return $highest_spending_category;
    } else {
        // Return an empty string if there was an error
        return '';
    }
}

function getHighestSpendingDay() {
    global $connection;

    // Query to get the highest spending day
    $query = "SELECT date, SUM(amount) AS total_amount FROM `expense record` GROUP BY date ORDER BY total_amount DESC LIMIT 1";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $highest_spending_day = $row['date'];

        // Free the result set
        mysqli_free_result($result);

        return $highest_spending_day;
    } else {
        // Return an empty string if there was an error
        return '';
    }
}

function getTotalSpentThisMonth() {
    global $connection;

    // Get the current month and year
    $current_month = date('m');
    $current_year = date('Y');

    // Query to get the total expenses for the current month
    $query = "SELECT SUM(amount) AS total_amount FROM `expense record` WHERE MONTH(date) = $current_month AND YEAR(date) = $current_year";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $total_spent_this_month = floatval($row['total_amount']);

        // Free the result set
        mysqli_free_result($result);

        return $total_spent_this_month;
    } else {
        // Return 0 if there was an error
        return 0;
    }
}

function getPercentageChangeFromPrevMonth() {
    global $connection;

    // Get the current month and year
    $current_month = date('m');
    $current_year = date('Y');

    // Calculate the previous month and year
    $prev_month = date('m', strtotime('first day of previous month'));
    $prev_year = date('Y', strtotime('first day of previous month'));

    // Query to get the total expenses for the current month
    $query_current_month = "SELECT SUM(amount) AS total_expenses_current_month FROM `expense record` WHERE YEAR(date) = $current_year AND MONTH(date) = $current_month";
    $result_current_month = mysqli_query($connection, $query_current_month);
    $row_current_month = mysqli_fetch_assoc($result_current_month);
    $total_expenses_current_month = floatval($row_current_month['total_expenses_current_month']);

    // Query to get the total expenses for the previous month
    $query_prev_month = "SELECT SUM(amount) AS total_expenses_prev_month FROM `expense record` WHERE YEAR(date) = $prev_year AND MONTH(date) = $prev_month";
    $result_prev_month = mysqli_query($connection, $query_prev_month);
    $row_prev_month = mysqli_fetch_assoc($result_prev_month);
    $total_expenses_prev_month = floatval($row_prev_month['total_expenses_prev_month']);

    // Calculate the percentage change
    if ($total_expenses_prev_month > 0) {
        $percentage_change = (($total_expenses_current_month - $total_expenses_prev_month) / $total_expenses_prev_month) * 100;
    } else {
        // If previous month's expenses were 0, set percentage change to 100%
        $percentage_change = 100;
    }

    return $percentage_change;
}

?>