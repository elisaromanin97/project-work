<?php
    /**
        NOTA BENE: 
        PER IL FUNZIONAMENTO DEL PROGETTO CARICARE I FILE INDEX.PHP (oppure index.html), SCRIPT.JS E STYLE.CSS 
        NELLA STESSA CARTELLA E AVVIARLI ASSIEME ALTRIMENTI NON VERRANNO RECUPERATI
    */
    //Funzione per scaricare i bilanci in php
    //Prendo con get e verifico che effettivamente sia settato l'anno
    if (isset($_GET['anno'])) {

        //I bilanci essendo maggiori di 25MB sono stati caricati in Google Drive 
        $bilanci = [
            '2021' => 'https://drive.google.com/uc?export=download&id=1U4HKI-sDQpiScKXOTEu0EemdxZeqNg6O',
            '2023' => 'https://drive.google.com/uc?export=download&id=1bsQy2Gb2hX52aEP_hMtiQWOjGsMShFRv'
        ];

        //Assegno alla mia variabile quello che recupero con anno
        $anno = $_GET['anno'];

        //Se non è settato esco dal ciclo
        if (!isset($bilanci[$anno])) {
            exit;
        }

        //Se è settato procedo allo scaricamento
        header("Location: " . $bilanci[$anno]);
        exit;
    }

?>
<!DOCTYPE html>
<html lang="it">
    <!-- Definisco l'head che uso principalmente per file esterni di stile e script-->
    <head>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width">
        <title>ProjectWork</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="script.js"></script>
    </head>

    <!-- Header che rappresenta in maniera più similare possibile quello dell'azienda scelta-->
    <header class="header" role="banner">
        <div class="header__logo-wrapper"> 
            <a class="header-logo" href="https://www.gruppoveronesi.it/"> 
                <img class="logo--light" src="https://www.gruppoveronesi.it/wp-content/uploads/2019/03/logo.png" alt="Logo Gruppo Veronesi">
            </a>
            <div class="header-brands-logos">
                <a href="http://www.aiafood.com" target="_blank"> 
                    <img src="https://www.gruppoveronesi.it/wp-content/uploads/2019/02/aia.png" alt="Logo AIA"> 
                </a>
                <a href="https://www.negroni.com/" target="_blank"> 
                    <img src="https://www.gruppoveronesi.it/wp-content/uploads/2019/02/negroni.png" alt="Logo Negroni"> 
                </a>
                <a href="https://www.veronesi.it/" target="_blank"> 
                    <img src="https://www.gruppoveronesi.it/wp-content/uploads/2019/02/veronesi.png" alt="Logo Veronesi"> 
                </a>
            </div>
        </div>
    </header>
    <!-- Body che contiene tutto il corpo effettivo del lavoro svolto-->
    <body>
        <!-- Nav che contiene le ancore per arrivare alla sezione desiderata-->
        <nav role="navigation" class="ancore">
            <a href="#storiaeprodotti">Storia e prodotti</a>
            <a href="#governance">Governance</a>
            <a href="#valoreeconomico">Valore economico</a>
            <a href="#sostenibilita">Sostenibilità</a>
            <a href="#ambiente">Ambiente</a>
            <a href="#download">Download</a>
        </nav>
        <!-- Main che contiene tutte le sezioni-->
        <main role="main">
            <section class="section section-storia" id="storiaeprodotti">
                <div class="section-inner">
                    <h1>Storia e prodotti</h1>
                    <p>La storia del Gruppo Veronesi è iniziata grazie al fondatore, Apollinare Veronesi che, nell’Italia del dopoguerra, ha favorito lo sviluppo della moderna zootecnia (scienza che si occupa dell’origine, evoluzione, produzione, miglioramento e razionale sfruttamento degli animali utili all’uomo). Era il <b>1958</b> quando Apollinare costruisce il primo impianto mangimistico a Quinto di Valpantena (VR). Nel 1968 il Gruppo si apre al settore dell’allevamento avicolo e della produzione e lavorazione di carni di pollame: viene istituita l’Agricola Italiana Alimentare S.p.A che diventerà famosa in Italia e nel mondo come AIA. Il Gruppo continua a crescere e nel 1985 entra anche nel settore delle carni e dei salumi di suino acquisendo importanti aziende come Italsalumi fino all’acquisizione, nel 2002, di Negroni, storica azienda italiana, eccellenza della salumeria. Ad oggi AIA è un leader dei settori in cui opera, Negroni è uno tra i marchi più amati e inconfondibili, Veronesi è primo in Italia, ottavo in europa e trentaseiesimo al mondo.</p>
                    <div class="prodotti">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/prodotti1.png" alt="Prima selezione di prodotti" class="img">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/prodotti2.png" alt="Seconda selezione di prodotti" class="img">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/prodotti3.png" alt="Terza selezione di prodotti" class="img">
                    </div>
                    <p>I due <b>grafici</b> che propongo si riferiscono rispettivamente: <br>
                        - alle aziende AIA e Negroni (primo grafico); <br>
                        - a Mangimi veronesi (secondo grafico). <br>
                        Questi due grafici derivano dalla media dei dati nei diversi settori che arrivano dalla fonte: <i>DATI Circana Quota a Volume AT 2023- Totale Italia - I-S-LSP-Discount</i>.</p>
                    <div class="grafici">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/grafico-aia-negroni.png" alt="Grafico AIA e Negroni" class="img">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/grafico-mangimi.png" alt="Grafico veronesi" class="img">
                    </div>
                </div>
            </section>
            <!-- Che dividono le varie sezioni ci sono questi div che permettono a livello grafico una sfumatura dei diversi sfondi-->
            <div class="sfumatura1"></div>
            <section class="section section-governance" id="governance">
                <div class="section-inner">
                    <h1>Governance</h1>
                    <div class="governance">
                        <div class="testo">
                            <p>Le <b>consociate</b> del Gruppo (diagramma alla destra) operano sotto la direzione e il coordinamento della capogruppo Veronesi Holding S.p.A. Composto da:</p>
                            <ul>
                                <li>Assemblea dei Soci: Nomina il Consiglio di Amministrazione e il Collegio Sindacale. Ogni socio è chiamato ad impegnarsi nella tutela del valore dell’attività societaria e della solidità patrimoniale.</li>
                                <li>Consiglio di Amministrazione:  I suoi compiti sono l’indirizzo strategico della gestione, il controllo dell’adeguatezza dell’assetto organizzativo, amministrativo e contabile, la valutazione del generale andamento della gestione. Composto da 8 membri: i rappresentanti delle famiglie dei 5 figli del Fondatore (Francesco Ballini, Antonio Nicodemo, Marcello Veronesi, Mario Veronesi, Tommaso Veronesi) e tre membri esterni (Massimo Zanin, Fausto Vecchi, Luigi Fasoli).</li>
                                <li>Collegio Sindacale: Vigila sull’osservanza della legge e dello Statuto. Composto da membri esterni al Gruppo: Mauro Melandri (presidente), Andrea Castelli e Primo Cappellini (sindaci).</li>
                                <li>Società di revisione: È una società esterna (Deloitte&Touche S.p.A.), a cui è affidata la revisione legale.</li>
                            </ul>
                            <p>Il Modello Organizzativo è un insieme di regole, procedure e modi di operare che definiscono il sistema organizzativo, di gestione e controllo interno all’azienda e mira a impedire o a contrastare la commissione dei reati sanzionati dal D.Lgs 231/01. L’Organismo di Vigilanza, invece, è un organo collegiale formato da tre componenti esterni all’azienda ed è collocato in posizione apicale all’interno dell’organizzazione, allo scopo di garantire l’autonomia da ogni forma di potenziale interferenza. </p>
                        </div>
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/governance.png" alt="Governance" class="img">
                    </div>
                </div>
            </section>
            <div class="sfumatura2"></div>
            <section class="section section-valori" id="valoreeconomico">
                <div class="section-inner">
                    <h1>Valori del gruppo e valori economici</h1>
                    <p>Soddisfare il consumatore è al centro della mission aziendale. Questo principio assieme alla passione per la qualità e l'eccellenza dei prodotti, l'innovazione e la ricerca, rispetto, fiducia, correttezza e dialogo sono i fondamenti ai quali si ispira. Altri elementi fondamentali sono quelli di creare entusiasmo e spirito di gruppo, efficienza, sostenibilità, creazione di valore e benessere animale.</p>
                    <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/dati_economici.png" alt="Dati economici">
                    <p>Circa 8700 persone di cui 200 dedicate alla qualità si impegnano costantemente per garantire l'eccellenza dei prodotti e circa 79mila ore di formazione offerte dall'azienda lo rendono possibile. Nel 2023 il bilancio ha chiuso con 4 miliardi di fatturato e 97.5 milioni di investimenti. Il 14% del fatturato dipende da politiche di export con ben 18 stabilimenti produttivi alimentari (+ 7 mangimifici). Il 100% delle acque reflue dell'avicolo vengono recuperate.</p>
                    <p>La creazione e la distribuzione del valore per i propri stakeholder è un impegno costante. Il <b>valore economico</b> rappresenta la ricchezza prodotta dal Gruppo distribuita e ripartita agli stakeholder con la seguente modalità: costi operativi riclassificati (principalmente acquisti di materie prime e servizi), remunerazione del personale (remunerazione diretta costituita da salari, stipendi e TFR e remunerazione indiretta costituita dagli oneri sociali), remunerazione dei finanziatori (interessi passivi), remunerazione della Pubblica Amministrazione (imposte sul reddito) e Comunità (erogazioni liberali). Il valore trattenuto dal Gruppo Veronesi è rappresentato principalmente dall’utile d’esercizio destinato a riserve, ammortamenti e accantonamenti. Nel 2023 è ufficialmente entrato in attività il primo sito produttivo in America e dedicato alla salumeria.</p>        
                </div>
            </section>
            <div class="sfumatura3"></div>
            <section class="section section-sostenibilita" id="sostenibilita">
                <div class="section-inner">
                    <h1>Sostenibilità</h1>
                    <div class="materialita">
                        <p class="materialita-text">Dal 2018 il Gruppo ha avviato un percorso strutturato e trasparente di rendicontazione e comunicazione del proprio approccio di sostenibilità e delle proprie performance in ambito di sostenibilità ambientale, sociale ed economica. L’Annual Report, rappresenta uno strumento strategico che racconta agli stakeholder i numerosi progetti svolti, le iniziative sviluppate, le linee di indirizzo del Gruppo che contribuiscono al raggiungimento di diversi dei 17 Sustainable Development Goals (SDGs), promossi dall’Organizzazione delle Nazioni Unite per favorire uno sviluppo sostenibile. Gli SDGs sviluppati attualmente sono: sconfiggere la fame, istruzione di qualità, parità di genere, acqua pulita e servizi igenico-sanitari, energia pulita e accessibile, lavoro dignitoso e crescita economica, imprese innovazione e infrastrutture, consumo e produzione responsabili, lotta contro il cambiamento climatico, vita sott'acqua. Conformemente a quanto previsto dagli standard di rendicontazione GRI Sustainability Reporting Standards, il Gruppo ha definito, attraverso un’<b>analisi di materialità</b>, le tematiche rilevanti per l’azienda dal punto di vista economico, sociale e ambientale e che potrebbero influenzare in modo sostanziale le valutazioni e le decisioni dei suoi stakeholder. L’aggiornamento dell’analisi di materialità ha previsto l’individuazione degli impatti generati positivi e negativi, effettivi o potenziali, raggruppati in tematiche materiali. La “Corporate Governance” non è stata esplicitata nella matrice di materialità in quanto non riconducibile a un impatto. L'attività produttiva parte dalla selezione accurata delle materie prime per i mangimi e si completa con la trasformazione e la distribuzione di carni, uova e salumi che rappresentano un’eccellenza della tradizione gastronomica italiana, esportata in oltre 70 paesi al mondo. Le certificazioni ISO 9001, QS e GLOBAL GAP sono alla base dei processi, così come l’HACCP e la norma ISO 22000 sono fondamentali per valutare e controllare i rischi. <br>
                        Il percorso inizia dalla selezione dei cereali, dei semi oleosi e delle granaglie: gli ingredienti alla base dei mangimi. Il bacino di fornitori è sempre più solido e qualificato, favorendo aziende italiane attraverso la sottoscrizione di contratti che prevedono l’adesione al Codice Etico e agli standard qualitativi richiesti e verificati in tempo reale.</p>
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/materialita.png" alt="Materialità" class="materialita-img">
                    </div>
                    <p>Una volta acquistati, i cereali arrivano nei mangimifici e, prima di entrare nel processo produttivo, vengono analizzati per verificare il rispetto dei parametri contrattuali. Solo se l’esito è positivo possono essere scaricati ed iniziare il processo di trasformazione dando vita agli oltre 1.700 mangimi marchiati Veronesi. Il 95% dei mangimi viene trasportato sfuso negli allevamenti, il resto viene confezionato. Confezioni che, grazie alla composizione in un unico materiale (mono PE) sono state rese riciclabili al 95% e hanno guadagnato il Worldstar Award della World Packaging Organization. Vengono fornite chiare indicazioni per lo smaltimento degli imballaggi. </p>
                    <div class="sostenibilita">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/immagine.png" class="img" alt="Immagine alimentare">
                        <p>Gli allevatori sono un patrimonio di cultura e di esperienza familiare del Paese: grazie al lavoro quotidiano portato avanti insieme al servizio tecnico/veterinario rappresentano uno dei comparti più significativi dell’industria agroalimentare italiana. Numerose aziende agricole familiari sono cresciute, trasmettendo valori di qualità, affidabilità e responsabilità che mette insieme formazione, benessere animale, biosicurezza, competitività, innovazione e sostenibilità. <b>AIA Oro Natura</b> identifica prodotti provenienti da polli cresciuti senza antibiotici fin dalla nascita, alimentati con una dieta vegetale non OGM, cresciuti con più spazio oltre quello previsto dai limiti di legge in ambienti con esposizione alla luce naturale e materiali manipolabili.
                        <b>AIA Bio</b>, un progetto che segue i rigorosi standard del disciplinare biologico, con mangimi certificati e accesso a parchetti esterni per gli animali. Dal 2004 i settori di produzione zootecnica hanno aderito volontariamente allo standard Global Gap, che definisce schemi di certificazione volontari riconosciuti in tutto il mondo. L’attestazione prevede rigorosi controlli su vari aspetti, tra cui la tracciabilità, gli impatti ambientali e la biodiversità, la salute animale, il controllo di mangimi e di acqua, le attrezzature all’interno dell’allevamento, il benessere degli animali, la formazione degli operatori in allevamento. Attualmente, il 100% della filiera suina è certificata Global Gap. Introdotto il DTP 109, un disciplinare tecnico produttivo volontario certificato da CSQA, che certifica gli animali allevati senza l’uso di antibiotici negli ultimi 120 giorni di vita. Un altro progetto importante è il DTP 144, che prevede la gestazione libera delle scrofe e il divieto di taglio della coda o degli incisivi. L'impegno per la sostenibilità logistica si manifesta anche nella produzione di energia solare, grazie all’impianto fotovoltaico di Vallese di Oppeano in grado di produrre fino a 500.000 kwatt/ora di produzione annua. Iutti i transpallet utilizzati per la movimentazione interna sono a tecnologia litio. Tutto questo si integra in un sistema evoluto di fleet management che permette di monitorare ogni aspetto della consegna, dal momento della partenza fino all’arrivo, garantendo che ogni prodotto raggiunga il destinatario finale nelle migliori condizioni.</p>
                    </div>
                </div>
            </section>
            <div class="sfumatura4"></div>
            <section class="section section-ambiente" id="ambiente">
                <div class="section-inner">
                    <h1>Tutela dell’ambiente</h1>
                    <p>Con l’obiettivo di crescere in modo sostenibile, lavorano per evitare gli sprechi, produrre in modo efficiente, ridurre gli impatti e rispettare il contesto. Il Gruppo, con oltre 1.700 ettari di proprietà in Italia destinati ad aree boschive, colture o prati stabili, svolge un ruolo di conservazione e mantenimento delle aree intorno agli insediamenti produttivi industriali che altrimenti sarebbero incolte e abbandonate, contribuendo in prima linea a preservarne gli ecosistemi. Grazie ad un’attività di censimento del patrimonio arboreo e la piantumazione di nuovi alberi, la gestione dei prati stabili e il mantenimento delle coltivazioni, contribuisce direttamente all’assorbimento di circa 14.200 tonnellate di CO2 e alla valorizzazione del patrimonio naturale. Grazie a un Sistema di Gestione Integrato (Qualità - Sicurezza - Ambiente), in ogni processo aziendale sono stati individuati ruoli chiave con la responsabilità di sviluppare progetti e azioni di miglioramento nella gestione delle principali matrici ambientali: acqua, energia, rifiuti. Il monitoraggio accurato delle matrici ambientali, quali consumi elettrici e idrici, fonti energetiche e produzione di rifiuti, è stato esteso al 100% dei siti produttivi.</p>
                    <div class="ambiente">
                        <img src="https://raw.githubusercontent.com/elisaromanin97/project-work/main/img/ambiente.png" class="img" alt="Ambiente">
                        <p>L’obiettivo che l’azienda da anni persegue è quello di promuovere lo sviluppo e l’utilizzo di sistemi di produzione di energia a basso impatto ambientale, che si concretizza nella scelta di investire sia sulla capacità di ricavare energia dalla biomassa ottenuta dalla depurazione dei reflui industriali, sia sullo sfruttamento dell’energia solare. Il biogas arriva a coprire l’equivalente di circa il 7,6% (dato calcolato come energia del biogas/totale dei consumi di energia) del fabbisogno energetico. Il Gruppo è dotato di cinque impianti di digestione anaerobica che si trovano nei principali stabilimenti di avicolo. Il processo di digestione anaerobica produce Biogas dalla trasformazione dei composti organici contenuti nei fanghi derivanti dalla depurazione delle acque reflue. Il Biogas viene poi utilizzato come combustibile integrativo al gas naturale nelle centrali termiche esistenti e dedicate alla produzione di vapore saturo utilizzato nei processi produttivi. Il Gruppo è dotato di 8 impianti fotovoltaici, dislocati nelle sedi di Putignano, Guidonia (Roma), Bari, San Quirino, San Michele Extra, Larino, San Polo e, il più importante, Vallese di Oppeano. La diagnosi energetica (DE), è un’analisi dei siti e dei processi dal punto di vista energetico che attraverso l’individuazione dei vettori energetici impiegati (Energia Elettrica, Gas Naturale, Biogas) e dei consumi per le specifiche aree funzionali in cui possono essere suddivisi i processi, consente di individuare le criticità e le principali aree di miglioramento elaborando anche le proposte di efficientamento da realizzare. Nel corso del 2023 i consumi totali di energia del Gruppo si sono attestati a 3.907.250 GJ. Tali consumi sono composti da consumi di combustibili non rinnovabili quali gas metano, gasolio, benzina e GPL per un totale di 3.660.253 GJ, e da combustibili rinnovabili, biogas utilizzato per alimentare le caldaie, il cogeneratore e l’essiccatoio per un totale di 246.997 GJ. Per quanto riguarda invece i consumi relativi all’energia elettrica acquistata, pari a 1.505.676 GJ, sono stati ricompresi all’interno del computo di energia non rinnovabile in quanto non coperti da certificati di garanzia di origine. Oggi circa il 83% dei rifiuti sono destinati a riciclo, compostaggio o recupero. 98.5% rifiuti prodotti non pericolosi, quasi l’84% di questi viene destinato a riciclo, compostaggio o recupero. Con il lancio del progetto Atlantide, il Gruppo ha adottato un nuovo software che permette un controllo costante degli scarti produttivi al fine di trasformarli in risorse di valore economico. </p>
                    </div>
                </div>
            </section>
            <div class="sfumatura5"></div>
            <!-- Sezione che mi serve per il download dei report attraverso le due modalità -->
            <section class="section section-download" id="download">
                <div class="section-inner">
                    <div class="container-download">
                        <h1>Scarica i bilanci di sostenibilità di Veronesi Holding SPA</h1>
                        <br>
                        <label for="annoSelect">Attraverso Javascript</label>
                        <select id="annoSelect">
                            <option value="">Seleziona l'anno</option>
                            <option value="2021">File 2021</option>
                            <option value="2023">File 2023</option>
                        </select>

                        <button id="downloadBilanci">Scarica</button>

                        <p id="msg"></p>
                    
                        <label for="anno">Attraverso PHP</label>
                        <form method="GET" action="">
                            <select id="anno" name="anno" required>
                                <option value="">Seleziona l'anno</option>
                                <option value="2021">File 2021</option>
                                <option value="2023">File 2023</option>
                            </select>
                            <button type="submit">Scarica</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Bottone per lo scroll a tornare alla pagina iniziale-->
            <button id="scrollTopBtn" aria-label="Torna all'inizio">
                <i class="fa-solid fa-arrow-up"></i>
            </button>
        </main>
    </body>
    
    <!-- Footer che rappresenta in maniera più similare possibile quello dell'azienda scelta-->
    <footer class="footer" role="contentinfo">
        <div class="footer-main row">
            <div class="col col-4"> 
                <img class="footer-logo" src="https://www.gruppoveronesi.it/wp-content/uploads/2019/03/logo-gray.png" alt="logo" title="Logo">
            </div>
            <div class="col col-4">
                <p>Veronesi Holding S.p.A. - Via Valpantena 18/G - 37142 Verona (Italia)<br>Tel. +39 045.80.97.511 - Fax +39 045.55.15.89<br>n. Registro Imprese di Verona e C.F. 04729010019 - P.IVA 02429770239<br>R.E.A. Verona n. 193440 - Capitale Sociale € 86.581.683 i.v</p>
            </div>
            <div class="col col-4 main-links">
                <a href="https://www.gruppoveronesi.it/" class="link-company"> 
                    <span>Gruppo Veronesi</span>
                </a>
                <div class="sub-links">
                    <div class="link-aia">
                        <a href="https://www.aiafood.com/it" target="_blank">www.aiafood.com</a>
                    </div>
                    <div class="link-negroni">
                        <a href="https://www.negroni.com/it" target="_blank">www.negroni.com</a>
                    </div>
                    <div class="link-veronesi">
                        <a href="https://www.veronesi.it/" target="_blank">www.veronesi.it</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <span>Questa pagina è unicamente a scopo didattico</span>
        </div>
    </footer>
</html>
