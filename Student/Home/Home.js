function updateDateTime() {
    const now = new Date();
    const options = { weekday:'long', year:'numeric', month:'long', day:'numeric' };
    const date = now.toLocaleDateString('id-ID', options);
    const time = now.toLocaleTimeString('id-ID');

    document.getElementById('date').innerText = date;
    document.getElementById('time').innerText = time;
  }
  setInterval(updateDateTime, 1000);
  updateDateTime();

function loadAttendanceData() {
  document.getElementById("statusHariIni").innerText = attendanceData.statusHariIni;
  document.getElementById("jamMasuk").innerText = attendanceData.jamMasuk;
  document.getElementById("jamPulang").innerText = attendanceData.jamPulang;
  document.getElementById("hadir").innerText = attendanceData.hadir + " Hari";
  document.getElementById("izin").innerText = attendanceData.izin + " Hari";
  document.getElementById("terlambat").innerText = attendanceData.terlambat + " Hari";
}

loadAttendanceData();
