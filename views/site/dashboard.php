<?php
/* @var $this yii\web\View */
/* @var $chartData array */
/* @var $totalCount int */

$this->title = 'Dashboard';
$this->registerJsFile('https://cdn.jsdelivr.net/npm/chart.js', ['position' => \yii\web\View::POS_END]);
?>

<h1><?= $this->title ?></h1>

<div style="display: flex; align-items: center; justify-content: center; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
    <!-- Total Count Box -->
    <div id="totalCountBox" style="
    width: 300px;
    height: 250px;
    display: flex;
    flex-direction: column; /* Allow stacking of icon and count */
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 2.5rem;
    color: #FFFFFF;
    font-weight: bold;
    border-radius: 20px;
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
    position: relative;
    overflow: hidden;
">
    <!-- Pulsating Background -->
    <div style="
        position: absolute;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        animation: pulse 6s infinite;
    "></div>

    <!-- Icon -->
    <img src="<?= Yii::getAlias('@web') ?>/images/icon.png" alt="Icon"style="
        width: 80px; 
        height: 80px; 
        margin-bottom: 10px; 
    " />

    <!-- Animated Total Count -->
    <span id="animatedTotalCount">0</span>
</div>


    <!-- Line Chart -->
    <canvas id="lineChart" style="
        max-width: 300px;
        max-height: 250px;
        background-image: linear-gradient(90deg, #2fd1cf, #82d1bf, #4c9270);
        border-radius: 20px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
    "></canvas>
</div>

<?php
// Extract data for the chart
$labels = json_encode(array_column($chartData, 'label'));
$data = json_encode(array_column($chartData, 'total'));

// Register JavaScript for animations and chart
$this->registerJs(<<<JS
    // Animate Total Count
    const totalCount = $totalCount; 
    const totalCountBox = document.getElementById('animatedTotalCount');
    let currentCount = 0;

    // Determine increment and step time dynamically based on the total count
    const increment = Math.ceil(totalCount / 100); // Divide into 100 steps
    const stepTime = Math.max(10, Math.floor(1500 / (totalCount / increment))); // Ensure smooth animation

    function animateCount() {
        const interval = setInterval(() => {
            currentCount += increment;
            if (currentCount >= totalCount) {
                currentCount = totalCount; // Set final value to ensure accuracy
                clearInterval(interval); // Stop the interval
            }
            totalCountBox.textContent = currentCount.toLocaleString(); // Format with commas
        }, stepTime);
    }
    animateCount();

    // Line Chart Configuration
    var lineCtx = document.getElementById('lineChart').getContext('2d');

    // Create a dynamic gradient background for the line
    var gradient = lineCtx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(255, 81, 47, 0.8)'); // Top gradient color
    gradient.addColorStop(1, 'rgba(221, 36, 118, 0.2)'); // Bottom gradient color

    // Gradient fill for under the line
    var lineFill = lineCtx.createLinearGradient(0, 0, 0, 400);
    lineFill.addColorStop(0, 'rgba(27, 43, 46, 0.2)');
    lineFill.addColorStop(1, 'rgba(255, 81, 47, 0)');

    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: $labels, // X-axis labels
            datasets: [{
                label: 'Total Fail',
                data: $data, // Y-axis data
                borderColor: '#FFFFFF', // Line color
                backgroundColor: lineFill, // Gradient fill below the line
                borderWidth: 3, // Thickness of the line
                tension: 0.4, // Smooth curve
                pointBackgroundColor: '#FFFFFF', // Points' background color
                pointBorderColor: '#2fd1cf', // Points' border color
                pointBorderWidth: 2, // Points' border width
                pointRadius: 5, // Points' size
                pointHoverRadius: 8, // Points grow on hover
                pointHoverBackgroundColor: '#1edc85', // Hover color for points
                pointHoverBorderColor: '#FFFFFF', // Hover border color
                pointHoverBorderWidth: 3, // Hover border width
                fill: true, // Enable gradient fill below the line
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false // Hide legend for simplicity
                },
            },
            layout: {
                padding: 10 // Reduce padding for a tighter layout
            },
            scales: {
                x: {
                    grid: {
                        display: false // Remove x-axis gridlines
                    },
                    ticks: {
                        display: false // Hide x-axis labels
                    }
                },
                y: {
                    grid: {
                        display: false // Remove y-axis gridlines
                    },
                    ticks: {
                        display: false // Hide y-axis labels
                    }
                }
            },
            animation: {
                duration: 1500, // Faster entry animation
                easing: 'easeInOutCubic', // Animation effect
            },
            elements: {
                line: {
                    borderJoinStyle: 'round', // Smooth line corners
                }
            }
        }
    });

    // Pulse Animation
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes pulse {
            0% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.2); }
            100% { opacity: 0.5; transform: scale(1); }
        }
    `;
    document.head.appendChild(style);
JS);
?>
