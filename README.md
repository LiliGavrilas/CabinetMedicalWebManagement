# CabinetMedicalWebManagement
Recurgand la un API REST/GraphQL propriu, sa se realizeze o aplicatie de management a cabinetelor medicale private. Cabinetele isi vor crea cont pe platforma,  iar apoi vor adauga propriul personal medical. Calendarul programarilor impreuna cu fisele pacientilor vor fi gestionate in aceasta aplicatie, deci si pacientii isi vor crea un cont - la invitatia personalului medical - unde pot sa-si programeze vizite ulterioare si sa-si vada propria fisa.   Mai mult, aplicatia va recurge la  Google API OCR pentru scanarea analizelor pacientilor si extragerea automata a datelor. De asemenea, personalul medical cat si pacientii vor putea comunica in timp real direct in interiorul platformei via un chat text si audio. Se va oferi suport pentru import/export de date in format CSV. Autentificarea si autorizarea vor recurge la OAuth. Bonus: integrarea cu specificatiile oficiale CNAS &lt;http://siui.casan.ro/cnas/siui_3.7/specificatii>. 



Am impartit userii aplicatii web in 3 categorii:

  -Administrator clinica;
  
  -Doctor;
  
  -Client;
  
 Administratorul clinicii:
 
  -isi va crea un cont pe platforma si va introduce toate datele necesare(logo, nume, etc.) pentru a inregistra clinica;
  
  -va adauga propriul personal medical;
  
  -va da acces unei persoane responsabile sa gestioneze fisele pacientilor, sa scaneze/introduca rezultatele analizelor si sa faca invitatie pe platforma clientilor;
  
  -in caz de necesitate va gestiona Calendarul programarilor si fisele pacientilor;
  
  
  Medicul:
  
  -poate sa isi vada orarul de munca in calendarul programarilor;
  
  -trimite invitatie pe platforma pacientilor;
  
  -sa vada istoricul pacientilor(fise medicale/ rezultate analize/etc);
  
  -va putea comunica in timp real direct in interiorul platformei via un chat text si audio cu pacientul;
    
    
  Clientul:
  
  -isi va crea cont la invitatia medicului;
  
  -pote sa-si programeze vizite;
  
  -poate sa isi vizualizeze fisa personala;
  
  -poate sa isi vada rezultatul analizelor;
  
  -va putea comunica in timp real direct in interiorul platformei via un chat text si audio cu medicul;
  
  
  Done till now:

- pagini template cu diferite actiuni de html/css reponsive . Nu sunt legate/imbinate intre ele inca.

- putin java script pentru butoane calendar

- tutorial mvc in care incercam sa aducem paginile si sa le punem actiuni.

- inceput de documentatie in standard-ul Scholarly HTML 

- c4model diagrama L1 din cele 4.  
![c4_modelL1](https://i.imgur.com/SuKtgxn.png)
    
