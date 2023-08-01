<?php
// Database connection
include 'include/config.php';

function getChartDataForLineChart() {
    global $connection;

    // Query to fetch data from the 'expense record' table
    $query = "SELECT DATE_FORMAT(date, '%b') AS month, SUM(amount) AS total_amount FROM `expense record` GROUP BY month ORDER BY STR_TO_DATE(month, '%M')";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $chart_data = array();

        // Fetch the data and store it in the chart_data array
        while ($row = mysqli_fetch_assoc($result)) {
            $chart_data[] = array(
                'month' => $row['month'],
                'amount' => floatval($row['total_amount']) // Convert to float for accurate representation
            );
        }

        // Free the result set
        mysqli_free_result($result);

        return $chart_data;
    } else {
        // Return an empty array if there was an error
        return array();
    }
}
// Function to get data for the pie chart
function getChartDataForPieChart() {
    global $connection;

    // Query to fetch data from the 'expense record' table
    $query = "SELECT SUM(amount) AS total_amount, category FROM `expense record` GROUP BY category";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $chart_data = array();

        // Fetch the data and store it in the chart_data array
        while ($row = mysqli_fetch_assoc($result)) {
            $chart_data[] = array(
                'category' => $row['category'],
                'amount' => floatval($row['total_amount']) // Convert to float for accurate representation
            );
        }

        // Free the result set
        mysqli_free_result($result);

        return $chart_data;
    } else {
        // Return an empty array if there was an error
        return array();
    }
}

function getChartDataForBarChart() {
    global $connection;

    // Query to fetch data from the 'expense record' table
    $query = "SELECT SUM(amount) AS total_amount, category FROM `expense record` GROUP BY category";

    $result = mysqli_query($connection, $query);

    // Check if the query executed successfully
    if ($result) {
        $chart_data = array();

        // Fetch the data and store it in the chart_data array
        while ($row = mysqli_fetch_assoc($result)) {
            $chart_data[] = array(
                'category' => $row['category'],
                'amount' => floatval($row['total_amount']) // Convert to float for accurate representation
            );
        }

        // Free the result set
        mysqli_free_result($result);

        return $chart_data;
    } else {
        // Return an empty array if there was an error
        return array();
    }
}

// Setting the data queries as a command
$data_for_line_chart = getChartDataForLineChart();
$data_for_pie_chart = getChartDataForPieChart();
$data_for_bar_chart = getChartDataForBarChart();

?>