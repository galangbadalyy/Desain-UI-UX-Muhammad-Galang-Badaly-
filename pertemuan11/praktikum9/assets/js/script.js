const inputValas = document.getElementById('valas'); 
const inputNilai = document.getElementById('nilai'); 
const inputRupiah = document.getElementById('rupiah'); 

const kurs = {
    'USD': 16000,
    'SGD': 11000,
}

function hitungKurs() {
    
    const jumlahUang = Number(inputNilai.value);

    
    const jenisMataUang = inputValas.value;

    console.log('Jumlah:', jumlahUang, 'Mata Uang:', jenisMataUang);

    
    if (kurs[jenisMataUang]) {
        const nilaiRupiah = jumlahUang * kurs[jenisMataUang];
        inputRupiah.value = nilaiRupiah;
    } else {
        inputRupiah.value = 0; 
    }
}

inputValas.addEventListener("change", hitungKurs);

inputNilai.addEventListener("input", hitungKurs);