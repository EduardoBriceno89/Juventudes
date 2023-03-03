const curp = document.getElementById("inpCurp");
const name = document.getElementById("inpName");
const fatherLastName = document.getElementById("inpFatherLastName");
const motherLastName = document.getElementById("inpMotherLastName");
const palceBirth = document.getElementById("inpPalceBirth");
const birthDate = document.getElementById("inpBirthDate");
const residence = document.getElementById("selResidence");
const email = document.getElementById("inpEmail");
const cellPhone = document.getElementById("inpCellPhone");
const guardianName = document.getElementById("inpGuardianName");

const myModalEl = document.getElementById('exampleModal');
myModalEl.addEventListener("show.bs.modal", function (event) {
    curp.value = "GAAM000410HCMRNRA0";
    name.value = "Rodrigo"; 
    fatherLastName.value = "Ochoa";
    motherLastName.value = "De la cruz";
    palceBirth.value = "Colima";
    birthDate.value = "2000-04-10";
    residence.selectedIndex = 5;
    email.value = "franky@gmail.com";
    cellPhone.value = "3121234596";
    guardianName.value = "Enrique Topete";
        
})
