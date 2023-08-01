<!-- List of Cards and Values to be Displayed in the Swiper on Dashboard.CSS -->

<?php
$cards = array(
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Remaining Balance',
        'icon' => 'fa-building-columns',
        'icon_class' => 'text-primary',
        'number' => 'RM1',
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Data Entries',
        'icon' => 'fa-database',
        'icon_class' => 'text-primary',
        'number' => getNumberOfDataEntries(),
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Total Expenditure',
        'icon' => 'fa-money-bill-transfer',
        'icon_class' => 'text-primary',
        'number' => number_format(getTotalExpenses(), 2),
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Average Expense per Transaction',
        'icon' => 'fa-comment-dollar',
        'icon_class' => 'text-primary',
        'number' => number_format(getAverageExpensePerTransaction(), 2),
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Highest Spending Category',
        'icon' => 'fa-cart-shopping',
        'icon_class' => 'text-primary',
        'number' => getHighestSpendingCategory(),
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Highest Spending Day',
        'icon' => 'fa-calendar-day',
        'icon_class' => 'text-primary',
        'number' => getHighestSpendingDay(),
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Total Spent This Month',
        'icon' => 'fa-money-check-dollar',
        'icon_class' => 'text-primary',
        'number' => number_format(getTotalSpentThisMonth(), 2),
    ),
    array(
        'bg_class' => 'border-start-primary',
        'title' => 'Percent Change from Last Month',
        'icon' => 'fa-percent',
        'icon_class' => 'text-primary',
        'number' => number_format(getPercentageChangeFromPrevMonth(), 2) . '%',
    ),

    // Add more cards here if needed
);
?>