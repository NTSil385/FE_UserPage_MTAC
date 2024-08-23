window.onload = function () {

  var chart_01 = new CanvasJS.Chart("char-donut", {
    animationEnabled: true,
    title:{
      text: "Contract",
      horizontalAlign: "left" 
    },
    data: [{
      type: "doughnut",
      startAngle: 60,
      //innerRadius: 60,
      indexLabelFontSize: 17,
      indexLabel: "{label} - #percent%",
      toolTipContent: "<b>{label}:</b> {y} (#percent%)",
      dataPoints: [
        { y: 63, label: "Hoàn thành" },
        { y: 28, label: "Quá hạn" },
        { y: 10, label: "Đang xử lý" },
      ]
    }]
  });
  chart_01.render();

  
  var chart_02 = new CanvasJS.Chart("chart-bar", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
      text: "Total amount spent"
    },
    axisY: {
      title: "Reserves(MMbbl)"
    },
    data: [{        
      type: "column",  
      showInLegend: true, 
      dataPoints: [      
        { y: 300878, label: "Quý 1" },
        { y: 266455,  label: "Quý 2" },
        { y: 169709,  label: "Quý 3" },
        { y: 158400,  label: "Quý 4" },

      ]
    }]
  });
  chart_02.render();
  

}