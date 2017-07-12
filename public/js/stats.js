
// Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
        labels: ["Engineering", "Computer", "Technology", "Education", "Business"],
        datasets: [
            {
                label: "Numbers (totals)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                data: [
                    100,70,90,200,350
                ]
            }
        ]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Student Registered in the course'
        }
    }
});