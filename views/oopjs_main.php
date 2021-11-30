

<head>
<body>
<h2>Objektum orientált javascript</h2>
</body>

</head>
	<script type="text/javascript">
		function Tanulo(first, last, id, angol, matematika, fizika)
        {
          this.fName = first;
          this.lName = last;
          this.id = id;
          this.markA = angol;
          this.markM = matematika;
          this.markF = fizika;
          this.atlagSzamol = function()
          {
         	 return (this.markA + this.markM + this.markF)/3;
          }
		  this.displayDetails = function()
		  {
            document.write("Hallgatói azonosító: " + this.id + "<br />");
            document.write("Név: " + this.fName + " " + this.lName + "<br />");
            var avg = this.atlagSzamol();
            document.write("Átlag %: " + avg + "<br /><br />");
		  }
		}
        var st1 = new Tanulo("Kovács", "János", 15, 85, 79, 90);
        var st2 = new Tanulo("Szabó", "Ákos", 23, 75, 80, 82);
        var st3 = new Tanulo("Fluber", "Ottó", 4, 93, 89, 90);
        var st4 = new Tanulo("Karácsony", "János", 11, 55, 63, 45);
        st1.displayDetails();
        st2.displayDetails();
        st3.displayDetails();
        st4.displayDetails();
	</script>

