(function () {

    $(document).ready(function () {
        grafico01();
        grafico02();
    });

    function grafico01() {
        // Crear el gráfico de barras
        var ctx = document.getElementById('grafico01').getContext('2d');
        var grafico = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [10, 11, 18, 15, 20, 32],
                    borderWidth: 2,
                    borderColor: '#FF3B77',
                    backgroundColor: '#E03838'
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cantidad de ventas por categoría'
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        stacked: true,
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

    function grafico02() {
        // Crear el gráfico de barras
        var ctx = document.getElementById('grafico02').getContext('2d');
        var grafico = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [10, 11, 18, 15, 20, 32],
                    borderWidth: 2,
                    backgroundColor: '#7ED3FD'
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cantidad de ventas por categoría'
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        stacked: true,
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

})();