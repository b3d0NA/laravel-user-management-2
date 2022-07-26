<?php

namespace Faker\Provider\nb_NO;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{firstName}} {{lastName}} {{company_idSuffix}}',
        '{{lastName}} & {{lastName}} {{company_idSuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} og {{lastName}}',
        '{{lastName}} og {{lastName}} {{company_idSuffix}}',
    ];

    /**
     * Common suffixes
     *
     * @see https://www.brreg.no/bedrift/organisasjonsformer/
     */
    protected static $company_idSuffix = ['ANS', 'AS', 'ASA', 'BA', 'DA', 'ENK', 'GFS', 'KTRF', 'NUF', 'PK', 'SA', 'SPA', 'STI', 'VIFE'];

    /**
     * 1500 random job titles from Statistisk Sentralbyrå
     *
     * @see http://www.ssb.no/a/yrke/yrke.csv
     */
    protected static $jobTitleFormat = [
        'Administrasjonsdirektør', 'Administrasjonskonsulent', 'Administrasjonssekretær', 'Administrasjonssjef', 'Administrerende Overlege', 'Admiral', 'Advokatassistent', 'Aerobicinstruktør', 'Afis-Fullmektig', 'Agrotekniker', 'Ais-Fullmektig', 'Akrobat', 'Aktivitør', 'Akupunktør', 'Alarmoperatør', 'Allmenningbestyrer', 'Allmennpraktiserende Lege', 'Amanuensis', 'Ambassaderåd', 'Ambassadesekretær', 'Ambulansemedhjelper', 'Ambulansesjef', 'Ambulerende Vaktmester', 'Ammoniakkoker', 'Anestesilege', 'Animatør', 'Anleggsdykker', 'Anleggsgartnermester', 'Anleggsmaskinkjører', 'Anleggsmaskinmekaniker', 'Anleggsoperatør', 'Annenflyger', 'Annonseakkvisitør', 'Annonsebehandler', 'Annonsekonsulent', 'Annonseselger', 'Annonsesjef', 'Anretningshjelp', 'Apotekmedarbeider', 'Arbeidsmedisiner', 'Arbeidssjef', 'Arbeidsstudieingeniør', 'Arbeidsterapeut', 'Arbeidstilrettelegger', 'Arbeidstilsynskontrollør', 'Arbeidstilsynsrådgiver', 'Arkivassistent', 'Arkivmedarbeider', 'Arrestforvarer', 'Asfaltarbeider', 'Asfaltverkarbeider', 'Asfaltør', 'Assistentfotograf', 'Assisterende Administrerende Direktør', 'Assisterende Banksjef', 'Assisterende Bestyrer', 'Assisterende Borer', 'Assisterende Byfogd', 'Assisterende Fylkeshelsesjef', 'Assisterende Fylkeslege', 'Assisterende Fylkesmann', 'Assisterende Helsedirektør', 'Assisterende Kjøkkensjef', 'Assisterende Kommunegartner', 'Assisterende Sjefflygeleder', 'Assisterende Sjefspsykolog', 'Assisterende Sykepleiesjef', 'Assisterende Vaktmester', 'Astrofysiker', 'Astronom', 'Atomfysiker', 'Attache', 'Autoklavoperatør', 'Autoklavpasser', 'Automasjonsingeniør', 'Automatiker', 'Automatiseringsmontør', 'Avdelingsarkitekt', 'Avdelingsbanksjef', 'Avdelingsbetjent', 'Avdelingsdirektør', 'Avdelingsergoterapeut', 'Avdelingsingeniør', 'Avdelingsleder/fysioterapeut', 'Avdelingspsykolog', 'Avdelingssekretær', 'Avdelingssjef', 'Avdelingssjef Akvakultur Mv.', 'Avdelingssjef Restaurant', 'Avdelingssykepleier', 'Avlaster', 'Avlskonsulent', 'Avløser',
        'Babysvømmeinstruktør', 'Badeassistent', 'Badebetjent', 'Bakermester', 'Bakteriolog', 'Banearbeider', 'Bankassistent', 'Bankkonsulent', 'Banksjef', 'Barkeeper', 'Barmedarbeider', 'Barne- Og Ungdomssekretær', 'Barnehageassistent', 'Barnehjemsbestyrer', 'Barnepasser', 'Barnevernskonsulent', 'Bartender', 'Basketballtrener', 'Bedriftskonsulent', 'Bedriftspsykolog', 'Bedriftsrevisor', 'Bedriftsøkonom', 'Befrakter', 'Begravelsesbyråassistent', 'Begravelsesbyråmedarbeider', 'Begravelsesbyråsjåfør', 'Beleggskjærer', 'Bemanningskonsulent', 'Benkesnekker', 'Beregner', 'Bergmester', 'Bergverksarbeider', 'Beskjærer', 'Bestyrer Helsetjenester', 'Betjent', 'Betongindustriarbeider', 'Betongvarearbeider', 'Bibliotekleder', 'Biblioteksjef', 'Bilagskontrollør', 'Bilelektriker', 'Bilgummiarbeider', 'Bilinspektør', 'Bilklargjører', 'Billedkonsulent', 'Billedtekniker', 'Billettekspeditør', 'Billettkonsulent', 'Billettkontrollør', 'Billettselger', 'Billettør', 'Bilmegler', 'Bilmekaniker', 'Bilmottaker', 'Bilpleier', 'Bilrenser', 'Bilsakkyndig', 'Biltilsyninspektør', 'Biopat', 'Blandemaskinoperatør', 'Blander', 'Blogger', 'Blomsterdekoratør', 'Blåseinstrumentmaker', 'Bokbinder', 'Bokbinderassistent', 'Bokbussassistent', 'Bokbussfører', 'Bokhandlermedarbeider', 'Bokhandlermedhjelper', 'Bokholderassistent', 'Bokollektivmedarbeider', 'Boligleder', 'Boligsjef', 'Bomringvakt', 'Bomvakt', 'Bookingansvarlig', 'Bookingmedarbeider', 'Bookingsekretær', 'Borearbeider', 'Boredekksarbeider', 'Boreingeniør', 'Boreoperasjonsleder', 'Borer', 'Boresjef', 'Borevæskeingeniør', 'Botaniker', 'Boveileder', 'Bowlingvert', 'Branninspektør', 'Brannisolatør', 'Brannkonstabel', 'Brannmester', 'Brannvakt', 'Brannvarslerinstallatør', 'Brenner', 'Brolegger', 'Bromaler', 'Brooperatør', 'Brukskunstner', 'Brygger', 'Bryggeriformann', 'Bryggerimester', 'Brønnborer', 'Budsjåfør', 'Bukker', 'Bulldoserkjører', 'Bunadmedarbeider', 'Bunnlærstanser', 'Buntmaker', 'Business Controller', 'Bussfører', 'Butikkinnehaver', 'Butikkinspektør', 'Butikkmedarbeider', 'Butikkonsulent', 'Butikksjef', 'Butikkslakter', 'Byarkitekt', 'Bydelsdirektør', 'Byfogd', 'Byggekranfører', 'Byggesaksbehandler', 'Byggesjef', 'Byggtapetserer', 'Byggtapetsermester', 'Bygningsarbeider', 'Bygningskontrollør', 'Byplanlegger', 'Byplansjef', 'Byrettsdommer', 'Byråd', 'Byssegutt', 'Byssepike', 'Båndsager', 'Båtfører', 'Båtmekaniker', 'Bærplukker', 'Børsdirektør', 'Børsemakermester', 'Børstemaker', 'Bøter',
        'Cabin Chief', 'Cafemedarbeider', 'Campingplassmedarbeider', 'Cash Management Controller', 'Cellulosearbeider', 'Charge D\'affaires', 'Cirkustekniker', 'Cnc-Operatør', 'Coach', 'Controller', 'Croupier', 'Cruiseassistent',
        'Daglig Leder', 'Dagsenterleder', 'Damefrisør', 'Danselærer', 'Danser', 'Dataadministrator', 'Datamaskinoperatør', 'Dataservicetekniker', 'Datasjef', 'Datatekniker', 'Dekkbygger', 'Dekorkonsulent', 'Deleekspeditør', 'Delesjef', 'Departementsråd', 'Designer', 'Desksjef', 'Diakoniarbeider', 'Diettkokk', 'Direksjonssekretær', 'Dirigent', 'Discjockey', 'Distribusjonssjåfør', 'Distributør', 'Distriktsarbeidssjef', 'Distriktsbanksjef', 'Distriktsdirektør', 'Distriktsmusiker', 'Distriktsrevisor', 'Distriktstannlege', 'Divisjonsdirektør Akvakultur Mv.', 'Divisjonssjef Akavkultur Mv.', 'Dokumentarfilmfotograf', 'Dommer', 'Domorganist', 'Dp-Operatør', 'Dramalærer', 'Dramatiker', 'Driftsansvarlig Flyfrakt', 'Driftsfullmektig', 'Driftskonsulent', 'Driftskonsulent It', 'Driftskoordinator', 'Driftsplantekniker', 'Driftstekniker', 'Driftsøkonom', 'Droneoperatør', 'Drosjesjåfør', 'Dykkerleder', 'Dyrlege', 'Dørselger', 'Dørvert', 'Døvekapellan', 'Døveprest',
        'Edb-Leder', 'Ekspedent', 'Ekspedisjonssjef', 'Eksportagent', 'Eksportkonsulent', 'Eldreomsorgssjef', 'Elektriker', 'Elektrikerformann', 'Elektrisk Kabeloperasjonstekniker', 'Elektroautomasjonstekniker', 'Elektroingeniør', 'Elektromontør', 'Elkraftingeniør', 'Elverksmontør', 'Emaljebrenner', 'Emaljør', 'Energisjef', 'Engasjementssjef', 'Enhetsleder', 'Entomolog', 'Entreprenør', 'Ergoterapeut', 'Etatsjef', 'Etterforsker',
        'Fagbokforfatter', 'Faglaborant', 'Faglærer', 'Fagopplæringssjef', 'Fagsjef Skogbruk', 'Fagspesialist', 'Fagutdanningskonsulent', 'Faktureringssekretær', 'Familierådgiver', 'Fargekoker', 'Fargeriarbeider', 'Fasademontør', 'Fatter', 'Feierlærling', 'Feltarbeider', 'Feltassistent', 'Feltprest', 'Fengselsavdelingsbetjent', 'Fengselsbetjent', 'Fengselsinspektør', 'Fengselsoverbetjent', 'Fenrik', 'Ferdigstiller', 'Filetarbeider', 'Filialsjef', 'Filminspisient', 'Filmkontrollsjef', 'Filosof', 'Finansanalytiker', 'Finansråd', 'Finansrådgiver', 'Finanstilsynsdirektør', 'Fiolinbygger', 'Fiskehandler', 'Fiskeridirektør', 'Fiskerikonsulent', 'Fiskeriråd', 'Fiskeritekniker', 'Fiskerøkter', 'Fiskeskipper', 'Fiskeslakter', 'Fiskevraker', 'Fjøsmester', 'Flaskesorterer', 'Flekker', 'Flisarbeider', 'Fly-Radiotekniker', 'Flyattache', 'Flyeksportmedarbeider', 'Flyelektrotekniker', 'Flygeleder', 'Flygelederassistent', 'Flyinstruktør', 'Flymekaniker', 'Flyplassekspeditør', 'Flysystemavioniker', 'Flyteknisk Inspektør', 'Flytrafikkassistent', 'Flyvertinne', 'Fms-Operatør', 'Folklorist', 'Forbundssekretær', 'Forhandlingssjef', 'Forkynner', 'Forlagsmedarbeider', 'Formgiver', 'Formstøper', 'Formuesforvalter', 'Forsikringsassistent', 'Forsikringsrådgiver', 'Forsikringsselger', 'Forskalingsbas', 'Forsker', 'Forskjærer', 'Forskningsassistent', 'Forskningssjef', 'Forskningstekniker', 'Forstander', 'Forstkandidat', 'Forsvarsråd', 'Forsøksleder', 'Forvaltningsassistent', 'Forvaltningsingeniør', 'Forvaltningssjef', 'Fosterfar', 'Fotograf', 'Fotolaboratorieassistent', 'Fraktsjef', 'Freelancejournalist', 'Frisørlærling', 'Fritidsassistent', 'Fritidssjef', 'Frivillighetssentralleder', 'Fruktpressearbeider', 'Fruktprodusent', 'Fryseriarbeider', 'Fugearbeider', 'Fylkesagronom', 'Fylkesarkitekt', 'Fylkesbarnevernsjef', 'Fylkesbyggesjef', 'Fylkesingeniør', 'Fylkeskartsjef', 'Fylkeskontorsjef', 'Fylkeskoordinator I Fylkesarbeidskontoret', 'Fylkesmann', 'Fylkespersonalsjef', 'Fylkesstyrerepresentant', 'Fyrmester', 'Fyrtjenestermann', 'Fysiker', 'Fysiokjemiker', 'Fører', 'Førsteamanuensis', 'Førstefarmasøyt', 'Førstefotograf', 'Førstekonservator', 'Førstelagmann', 'Førstelektor', 'Førstemaskinist', 'Førstemeteorologifullmektig', 'Førstepasser', 'Førstepostbetjent', 'Førstepostfullmektig', 'Førstepreparant', 'Førsteprovisor', 'Førsterevisor', 'Førstesekretær', 'Førstestatsadvokat', 'Førstestyrmann', 'Førstetollinspektør',
        'Gallerivakt', 'Garderobebetjening', 'Garnfisker', 'Garnisonstannlege', 'Gartnerassistent', 'Gartnerformann', 'Gassverksjef', 'Gateselger', 'General', 'Generalinspektør For Heimevernet', 'Generalinspektør For Hæren', 'Geodet', 'Geolog', 'Geomatiker', 'Geotekniker', 'Gjærhusarbeider', 'Glasiolog', 'Glassarbeider', 'Glassblåser', 'Glassblåsermester', 'Glasshåndverker', 'Glasurarbeider', 'Godstrafikkleder', 'Grafikerlærling', 'Grafisk Formgiver', 'Grafisk Ingeniør', 'Grafisk Trykkermester', 'Granitthogger', 'Grensekontrollør', 'Grovsliper', 'Gruppeleder I Arbeidsmarkedsetaten', 'Gruvemåler', 'Guide', 'Gullarbeider', 'Gullsmedmester', 'Gummivarearbeider', 'Gynekolog', 'Gårdbruker', 'Gårdsarbeider', 'Gårdshjelp',
        'Hammerarbeider', 'Handelsagent', 'Handelsråd', 'Handlevognrydder', 'Hanskesyer', 'Hartskoker', 'Hattemaker', 'Havarisekretær', 'Havneassistent', 'Havnefogd', 'Havnekontrollør', 'Havnesjef', 'Havnetrafikkleder', 'Heisinstallatør', 'Heismontør', 'Heismontørlærling', 'Helse- Og Miljørådgiver', 'Helseinformatiker', 'Helseinspektør', 'Helsesøster', 'Herrefrisør', 'Hjelpekokk', 'Hjelpepleier', 'Hjelpepleiermedarbeider', 'Hjemmehjelper', 'Hjemmehjelpsleder', 'Hjemmekonsulent', 'Hjemmesykepleier', 'Hjullastersjåfør', 'Hms-Leder', 'Hoffmarskalk', 'Hollenderifører', 'Hostess', 'Hotellarbeider', 'Hotellmedarbeider', 'Hotellsjef', 'Hovedforvalter', 'Hovmester', 'Hr-Direktør', 'Hudarbeider', 'Hudterapeut', 'Hundefører', 'Husdyrkonsulent', 'Husholdsassistent', 'Husmorvikar', 'Hustrykker', 'Hvalfanger', 'Hydrograf', 'Hydrolog', 'Hylsemaker', 'Håndballtrener', 'Håndvever', 'Hørselsassistent', 'Høvelmester',
        'Idrettsinstruktør', 'Idrettsseksjonsleder', 'Idrettstrener', 'Ikt-Lærling', 'Illustratør', 'Importsjef', 'Impregnerer', 'Industribokbinder', 'Industrimontør', 'Industripsykolog', 'Industrirørlegger', 'Industrisnekker', 'Industrisyer', 'Informasjonskonsulent', 'Informasjonsleder', 'Informasjonsmedarbeider', 'Informasjonsskrankemedarbeider', 'Inkassoassistent', 'Inkassokonsulent', 'Inkassoleder', 'Inkassosjef', 'Inneselger', 'Innkjøpsansvarlig', 'Innkjøpsingeniør', 'Innkjøpskonsulent', 'Innreder', 'Innredningskonsulent', 'Innredningsmontør', 'Innsjekkingsmedarbeider', 'Innspillingsleder', 'Inspeksjonsingeniør', 'Inspisient', 'Installasjonsingeniør', 'Instituttsjef', 'Instruktør', 'Instruktørtannlege', 'Instrumentavioniker', 'Instrumentmaker', 'Instrumentrørlegger', 'Interiørarkitekt', 'Internatgruppeassistent', 'Internatgruppeleder', 'Internatleder', 'Iskremarbeider', 'It-Ansvarlig', 'It-Konsulent', 'It-Koordinator', 'It-Leder', 'It-Medarbeider', 'It-Prosjektleder', 'It-Selger/account Manager', 'It-Sjef', 'It-Systemingeniør', 'It-Teknisk Konsulent',
        'Jernbaneekspeditør', 'Jernbinderbas', 'Jordbrukssjef', 'Jordmor', 'Jordregistertekniker', 'Jordskifteassistent', 'Jordskiftedommer', 'Jordskifteingeniør', 'Jordskifteoverdommer', 'Jordskifterettsleder', 'Journalist', 'Juksafisker', 'Juridisk Rådgiver', 'Jurist', 'Juvelèr',
        'Kabelarbeider', 'Kabelbanefører', 'Kabinettsekretær', 'Kafemedarbeider', 'Kaiarbeider', 'Kaibetjent', 'Kalanderarbeider', 'Kammeroperatørleder', 'Kanselist', 'Kapitalforvalter', 'Kapsler', 'Kaptein', 'Kapteinløytnant', 'Kardiolog', 'Karosserimekaniker', 'Kartsjef', 'Kasseleder', 'Kennelleder', 'Keramiker', 'Keramisk Former', 'Kinokontrollør', 'Kinomaskinist', 'Kinosjef', 'Kirkegårdsarbeider', 'Kiropraktor', 'Kjellermester', 'Kjemikaliedykker', 'Kjemiker', 'Kjevekirurg', 'Kjeveortoped', 'Kjole- Og Draktsyermester', 'Kjøkkenbestyrer', 'Kjølemaskinist', 'Kjølemaskinkjører', 'Kjørelærer', 'Kjøreskolelærer', 'Kjøttskjærer', 'Klinikkassistent', 'Klinisk Ernærinsfysiolog', 'Klinisk Sosionom', 'Klinisk Vernepleier', 'Klokkedykker', 'Klokker', 'Klubbarbeider', 'Klubbleder', 'Klubbtillitsmann', 'Koder', 'Kokillestøper', 'Koksbrenner', 'Koldkjøkkenassistent', 'Kolonialhandler', 'Komiker', 'Kommunaldirektør', 'Kommunalsjef', 'Kommuneadvokat', 'Kommuneergoterapeut', 'Kommunekasserer', 'Kommuneplansjef', 'Kommunestyrerepresentant', 'Kommunikasjonsrådgiver', 'Kommunikasjonsrådmann', 'Kommunikatør', 'Kompressoroperatør', 'Konditor', 'Konduktør', 'Konfektmaker', 'Konferansevert', 'Konferansevertinne', 'Konkurransedirektør', 'Konserndirektør', 'Konsernregnskapssjef', 'Konservator', 'Konstruksjonstegner', 'Kontaktmann', 'Kontoraspirant', 'Kontormedarbeider', 'Kontorrengjører', 'Kontraktsleder', 'Kontrollflyger', 'Kontrolloperatør', 'Kontrollromsassistent', 'Kontrollsjef', 'Kontrollveterinær', 'Kontrollør', 'Kopperslager', 'Koranlærer', 'Koreolog', 'Korrespondent', 'Korrosjonsbehandler', 'Kostholdskonsulent', 'Kostnadsingeniør', 'Kostymeformann', 'Kraftmegler', 'Kraftverksdirektør', 'Kraftverksoperatør', 'Kredittleder', 'Kreftsykepleier', 'Krematoriebetjent', 'Kretskortmontør', 'Kringkastingssjef', 'Kulturhussjef', 'Kulturkonsulent', 'Kulturminnekonsulent', 'Kundemegler', 'Kundesuppertleder', 'Kunststopper', 'Kurator', 'Kursmedarbeider', 'Kursveileder', 'Kurvfletter', 'Kurvmaker', 'Kurvmakermester', 'Kusk', 'Kvalitetsbedømmer', 'Kvalitetsmedarbeider', 'Kvalitetssikringsassistent', 'Kvalitetssikringsinspektør', 'Kvalitetssikringskoordinator', 'Kvalitetssikringsleder', 'Kybernetiker', 'Kystdirektør',
        'Laboratorieleder', 'Laboratorierådgiver', 'Laboratorietekniker', 'Lagerformann', 'Lagerforvalter', 'Lagerfunksjonær', 'Lagerleder', 'Lagersjef', 'Lakkerer', 'Lakkoker', 'Landbruksdirektør', 'Landbruksmaskinmekaniker', 'Landbruksveileder', 'Landskapsarkitekt', 'Landssekretær', 'Landsstyremedlem', 'Ledende Aktivitør', 'Ledende Legesekretær', 'Leder', 'Leder It Brukerstøtte', 'Lege I Spesialisering', 'Legemiddelinspektør', 'Legesekretær', 'Legpredikant', 'Leigeskjærer', 'Lekotekleder', 'Lektor', 'Lensmannsbetjent', 'Lensmannsfullmektig', 'Leveransekoordinator', 'Ligningsrevisor', 'Ligningssekretær', 'Limarbeider', 'Limnolog', 'Lineegner', 'Linjeleder', 'Linjemontør', 'Litteraturagent', 'Litteraturkritiker', 'Location Scout', 'Locationassistent', 'Loddselger', 'Logistikkdirektør', 'Logistikkkoordinator', 'Logistikkleder', 'Logistikkmedarbeider', 'Logistikkonsulent', 'Logistikksjef', 'Logoped', 'Lokomotivfører', 'Lokomotivkontrollør', 'Losbåtfører', 'Losbåtsmann', 'Losinspektør', 'Lufthavnbetjent', 'Lufttrafikksjef', 'Lugarpike', 'Lydingeniør', 'Lydmester', 'Lydtekniker', 'Lysrigger', 'Lystekniker', 'Låsemontør', 'Lærervikar', 'Lærling', 'Lønningssekretær', 'Lønningssjef', 'Løypekjører', 'Løytnant',
        'Malerlærling', 'Manikyrist', 'Mannekeng', 'Marinamedarbeider', 'Mariningeniør', 'Maritim Sjef', 'Markedsassistent', 'Markedsfører', 'Markedskoordinator', 'Markedsmedarbeider', 'Markedsovervåker', 'Markedssjef', 'Marketingsekretær', 'Marketingsjef', 'Marketingsplanlegger', 'Markisemontør', 'Maskinassistent', 'Maskinfører', 'Maskiningeniør', 'Maskininnbinder', 'Maskinmekaniker', 'Maskinoffiser', 'Maskinpakker', 'Maskinpasser', 'Maskintegner', 'Maskør', 'Masseoppløser', 'Matematikkinstruktør', 'Materialadministrasjonssjef', 'Materialforvalter', 'Medhjelper', 'Medisinalråd', 'Meglerassistent', 'Meierikonsulent', 'Mekaniker', 'Mekanisk Kabeloperasjonstekniker', 'Mengeblander', 'Menger', 'Menig', 'Menighetsarbeider', 'Menighetssekretær', 'Mensendiecker', 'Merkevaresjef', 'Messepike', 'Messeplanlegger', 'Metalliserer', 'Metallpusser', 'Meteorologikonsulent', 'Mikrofilmfotograf', 'Mikseoperatør', 'Militærattache', 'Militærpsykolog', 'Miljøsaneringsarbeider', 'Miljøvernsjef', 'Miljøvernsjef På Svalbard', 'Mineralvannarbeider', 'Minerer', 'Minerydder', 'Minigraverfører', 'Misjonsprest', 'Misjonssekretær', 'Mobilkranfører', 'Modellsnekker', 'Modellør', 'Molekylærbiolog', 'Montasjeingeniør', 'Montasjesjef', 'Moseplukker', 'Motormann', 'Motormannlærling', 'Motormekaniker', 'Motorsykkelbud', 'Motorsykkelreparatør', 'Mub Ingeniør', 'Multimediedesigner', 'Museumsdirektør', 'Museumstekniker', 'Musikkinstrumentreparatør', 'Musikkpedagog', 'Musikkprodusent', 'Musikkterapeut', 'Mykolog', 'Myntarbeider', 'Møbelmontør', 'Møbelsnekker', 'Møbeltapetserer', 'Møllemester', 'Mølleoperatør', 'Møller', 'Mønsteroperatør', 'Mønstersliper',
        'Namsfullmektig', 'Natler', 'Nattportier', 'Nautisk Instrumentmaker', 'Ndt-Kontrollør', 'Neglskulptør', 'Nemndleder', 'Nestleder', 'Nettmann', 'Nettverksanalytiker', 'Nettverkstekniker', 'Notfisker', 'Nupper', 'Nyhetsredaktør', 'Nyhetsreporter', 'Nyhetssjef', 'Næringsmiddelkandidat', 'Næringsmiddelkontrollør', 'Næringsmiddelteknolog', 'Næringssjef',
        'Odontolog', 'Odontologisk Forsker', 'Offentlig Godkjent Sykepleier', 'Offisersaspirant', 'Offshore Installation Manager', 'Oldfrue', 'Oljeanalytiker', 'Oljedestillatør', 'Oljedirektør', 'Oljekontraktkjøper', 'Oljekontraktmegler', 'Oljepressearbeider', 'Oljeraffinerer', 'Oljeseparatør', 'Ombud', 'Ombudsmann For Forsvaret', 'Områdebanksjef', 'Områdesjef', 'Omsorgsarbeider', 'Onkolog', 'Onkologisykepleier', 'Operatør', 'Operatør Av Pakkemaskiner', 'Opplæringsfarmasøyt', 'Opplæringskonsulent', 'Opplæringsleder', 'Opplæringssjef', 'Oppmålingstekniker', 'Oppredningsarbeider', 'Oppsynssjef', 'Oppvekstsjef', 'Opsjonsmegler', 'Optikermedarbeider', 'Ordensvakt', 'Ordreplukker', 'Organisasjonskonsulent', 'Organisasjonsleder', 'Organisasjonssekretær', 'Orgelbygger', 'Ortoped', 'Ortopeditekniker', 'Ortopediteknisk Sjef', 'Ortoptist', 'Oseanograf', 'Ostemaker', 'Overgartner', 'Overingeniør', 'Overinspektør', 'Overjordmor', 'Overkokk', 'Overlærskjærer', 'Overpleier', 'Overpostbetjent', 'Overpostmester', 'Overradiograf', 'Oversetter', 'Overstiger', 'Oversykepleier',
        'Pantelåner', 'Pappsalarbeider', 'Paraplymaker', 'Parkettlegger', 'Parkettsliper', 'Parksjef', 'Parlamentarisk Leder', 'Partisekretær', 'Parykkmaker', 'Parykkmakermester', 'Passkontrollør', 'Pater', 'Patolog', 'Pedagog', 'Pedagogisk Psykolog', 'Pelsbereder', 'Pelsdyroppdretter', 'Pelsmaker', 'Pengeutlåner', 'Perforerer', 'Perfusjonist', 'Personal-Og Økonomidirektør', 'Personalassistent', 'Personalleder', 'Petrofysiker', 'Petroleumsarkitekt', 'Phytoterapeut', 'Pianoreparatør', 'Pianostemmer', 'Piping Ingeniør', 'Pizzabaker', 'Pizzasjåfør', 'Planlegger', 'Planleggingssjef', 'Planner', 'Plasseringsrådgiver', 'Pleiemedarbeider', 'Pleier', 'Poet', 'Polaritetsterapeut', 'Poliklinikksykepleier', 'Poliseprodusent', 'Politiadvokat', 'Politiavdelingssjef', 'Politiførstebetjent', 'Politimester', 'Politioverkonstabel', 'Politisk Sekretær', 'Popmusiker', 'Porteføljeforvalter', 'Porteføljeselger', 'Post Doc.', 'Postdoktor', 'Postfortoller', 'Postfullmektig', 'Postinspektør', 'Postmester', 'Poståpner', 'Preparantassistent', 'Preserveringstekniker', 'Pressebas', 'Pressefotograf', 'Presser', 'Privatassurandør', 'Prodekan', 'Production Supervisor', 'Produksjonsingeniør', 'Produksjonskoordinator', 'Produksjonsmedarbeider', 'Produksjonsoperatør', 'Produksjonsteknisk Leder', 'Produktsekretær', 'Produkttester', 'Produktutviklingskoordinator', 'Programleder', 'Programmerer', 'Programmeringssjef', 'Programsjef', 'Programvaretester', 'Programvareutvikler', 'Promotionkonsulent', 'Promotionmedarbeider', 'Prorektor', 'Prosjektmegler', 'Prosjektoppfølger', 'Prosjektstyringssjef', 'Prosjektøkonom', 'Protesetekniker', 'Protokollfører', 'Protokollsekretær', 'Pubvert', 'Purserassistent', 'Påkleder', 'Pølsemaker',
        'Rabbiner', 'Radarreparatør', 'Radioingeniør', 'Radioleder', 'Radiosondeleder', 'Radiotekniker', 'Radiotelefonist', 'Raffinerer', 'Rammemaker', 'Redaksjonssekretær', 'Redaktør', 'Regionsekretær', 'Regionsjef', 'Regissør', 'Registrert Legemiddelkonsulent', 'Regningsinnkrever', 'Regnskapsansvarlig', 'Rehabiliteringsterapeut', 'Reineier', 'Reklamefotograf', 'Reklamekonsulent', 'Reklamesekretær', 'Rekrutteringskonsulent', 'Rektor', 'Rekvisitamaker', 'Rekvisittleder', 'Rembursjef', 'Renholdsbetjent', 'Renholdsinspektør', 'Renholdskonsulent', 'Renholdsleder', 'Renovasjonskjører', 'Renseriarbeider', 'Renseribestyrer', 'Renserimaskinarbeider', 'Reparatør', 'Resepsjonsfullmektig', 'Resepsjonsleder', 'Reservedelsekspeditør', 'Reservedykker', 'Reservesjåfør', 'Ressurskoordinator', 'Restaurantinspektør', 'Restaureringsassistent', 'Restaureringstekniker', 'Rettsgenetiker', 'Rettsskriver', 'Revisjonsleder', 'Revisjonsrådgiver', 'Revisjonssjef', 'Revisor', 'Revisormedarbeider', 'Ridelærer', 'Rigger', 'Riksantikvar', 'Riksarkivar', 'Riksbibliotekar', 'Risiko Controller', 'Rockemusiker', 'Rockesanger', 'Rodeleder', 'Romanforfatter', 'Rosenterapeut', 'Roughneck', 'Rullestolreparatør', 'Ryddehjelp', 'Rådgivende Overlege', 'Røkter', 'Røntgenassistent', 'Røringeniør', 'Rørsveiser',
        'Sagbladstiller', 'Sagbruks- Og Høvleriarbeider', 'Sagsliper', 'Salatbarmedarbeider', 'Salgsanalytiker', 'Salgsassistent', 'Salgsingeniør', 'Salgskontrollør', 'Salgsrådgiver', 'Salgssekretær', 'Sambandsoffiser', 'Sametingspresident', 'Samfunnsgeograf', 'Saneringsarbeider', 'Scanner', 'Sceneinstruktør', 'Scenemester', 'Seismisk Personell', 'Sekretær', 'Seksjonsoverlege', 'Sektorsjef/assisterende Leder Av Politistyrke', 'Selfanger', 'Selger', 'Sementarbeider', 'Sementeringstekniker', 'Seminarholder', 'Senior Ingeniør', 'Senior Maskiningeniør', 'Senior Operatør', 'Senior Planleggsingsingeniør', 'Senior Økonomikonsulent', 'Senioranalytiker', 'Seniorinnkjøper', 'Seniorinspektør', 'Seniormetallurg', 'Seniorserviceingeniør', 'Senterleder', 'Sentralbanksjef', 'Sentralbordleder', 'Serigraf', 'Service Manager', 'Servicemontør', 'Servitør', 'Shopper', 'Shoveldoserkjører', 'Signalmann', 'Sikkerhetsansvarlig', 'Sikkerhetsdirektør', 'Sikkerhetsleder', 'Silketrykker', 'Sivilforsvarsinspektør', 'Sivilombud', 'Siviløkonom', 'Sjefbioingeniør', 'Sjeflege', 'Sjefsfysioterapeut', 'Sjefsingeniør', 'Sjefskokk', 'Sjefslandskapsarkitekt', 'Sjefssykepleier', 'Sjefsøkonom', 'Sjåfør Klasse B', 'Skadedyrkontrollør', 'Skadekonsulent', 'Skademedarbeider', 'Skaderegulerer', 'Skadesjef', 'Skatteregnskapssjef', 'Skatterevisor', 'Skiftekontrollør', 'Skiftingeniør', 'Skiftleder', 'Skilærer', 'Skimaker', 'Skinnsorterer', 'Skippingmedarbeider', 'Skipsradiomontør', 'Skipsreperatør', 'Skipsrørlegger', 'Skipssmed', 'Skjenkekontrollør', 'Skogbestyrer', 'Skogbruksplanlegger', 'Skogdirektør', 'Skogformann', 'Skogforvalter', 'Skogfullmektig', 'Skogsmaskinfører', 'Skogtaksator', 'Skoleassistent', 'Skoledirektør', 'Skolefritidsleder', 'Skoleinspektør', 'Skolepsykolog', 'Skolerådgiver', 'Skomakerlærling', 'Skopusser', 'Skoreparatør', 'Skrankeekspeditør', 'Skrankemedarbeider', 'Skredder', 'Skribent', 'Skript', 'Skuespiller', 'Skummer', 'Skøyteinstruktør', 'Slaktermester', 'Slankekonsulent', 'Sminkeassistent', 'Småbruker', 'Smører', 'Snekkermester', 'Snurrevadfisker', 'Snømåker', 'Snørelager', 'Soknediakon', 'Soneterapeut', 'Sortbytter', 'Sorterer', 'Sorteringsleder', 'Sortersalarbeider', 'Sosialfaglig Leder', 'Sosialinspektør', 'Sosialrådmann', 'Sosialsekretær', 'Sparklingsarbeider', 'Speditør', 'Spesialbioingeniør', 'Spesialergoterapeut', 'Spesialfysioterapeut', 'Spesiallærer', 'Spesialpedagog', 'Spesialpsykolog', 'Spesialrevisor', 'Spesialrådgiver', 'Spesialsykepleier', 'Spesialtannlege', 'Spoler', 'Sporveisdirektør', 'Spregningsarbeider', 'Spritdestillatør', 'Sprøytelakkerer', 'Spåkone/-Mann', 'Stabssjef', 'Staffcaptain', 'Stallkar', 'Stallmann', 'Stallpike', 'Stasjonsbetjent', 'Stasjonssjef', 'Statslosaspirant', 'Statsmeteorolog', 'Statsmykolog', 'Statssekretær', 'Statsskogsjef', 'Steinbruddsarbeider', 'Steinfagmester', 'Steward', 'Stillasbygger', 'Stipendiat', 'Stopper', 'Store Manager', 'Storkundeansvarlig', 'Stortingspresident', 'Storurmaker', 'Strategirådgiver', 'Stråleterapeut', 'Studieinspektør', 'Studieleder', 'Studiobetjent', 'Studioformann', 'Stuert', 'Styreleder', 'Styremedlem', 'Støttekontakt', 'Surveyer', 'Svakstrømsmontør', 'Sveiseinspektør', 'Sveiserlærling', 'Sykehusdirektør', 'Sykehusfarmasøyt', 'Sykehuslaborant', 'Sykehusprest', 'Sykehussjef', 'Sysselmann', 'Systemanalytiker', 'Systemarkitekt', 'Systemerer', 'Systemingeniør', 'Systemsjef', 'Systemtekniker', 'Systemtester', 'Systemutvikler', 'Sølvsiselør', 'Sølvsmed', 'Sølvtrykker', 'Søppelkjører',
        'Taksteinlegger', 'Takstmann', 'Takstøkonom', 'Taktekker', 'Tallmagiker', 'Tannhelsesekretær', 'Tannhygieniker', 'Tannlegeassistent', 'Tannteknikermester', 'Tapper', 'Tapperiformann', 'Taubanefører', 'Taxisjåfør', 'Teglsorterer', 'Tegneassistent', 'Teknisk Ansvarlig', 'Teknisk Direktør', 'Teknisk Rådmann', 'Tekstilkonservator', 'Tekstilkunstner', 'Tekstiloperatør', 'Tekstiltrykker', 'Teleekspeditør', 'Telefonsentralmontør', 'Telefullmektig', 'Telegrafbetjent', 'Telekommunikasjonsingeniør', 'Telesjef', 'Teolog', 'Teppelegger', 'Terminalansvarlig', 'Terminalarbeider', 'Terminalleder', 'Termisk Sprøyter', 'Tilrettelegger', 'Tilsynslege', 'Tilsynsveterinær', 'Tiltakssjef', 'Tivoliarbeider', 'Togelektriker', 'Togkontrollør', 'Togsjef', 'Tolldistriktssjef', 'Tollkasserer', 'Tollstedsjef', 'Topograf', 'Torghandler', 'Total Service Manager', 'Totalisatorfunksjonær', 'Trafikkflyger', 'Trafikklærer', 'Trafikksjef', 'Trailersjåfør', 'Transformatormontør', 'Transportformann', 'Transportleder', 'Transportmedarbeider', 'Transportsjef', 'Transportør', 'Tredreier', 'Trepleier', 'Trikkefører', 'Truckfører', 'Trygdedirektør', 'Trygderevisor', 'Trygdesjef', 'Trykker', 'Trykktester', 'Trålbas', 'Turistvert', 'Turoperatør', 'Tvisteløseleder', 'Tvisteløser', 'Tårnarbeider', 'Tårnkranfører', 'Tårnmann', 'Tømmerberegner', 'Tømmerfløter', 'Tømmerhogger', 'Tømmermåler', 'Tømmermålingsinspektør', 'Tømmersjef', 'Tømmersorterer', 'Tørkepasser', 'Tørker', 'Tørrfisktilvirker', 'Tørrstoffkoker',
        'Ullklassifisør', 'Undervisningsassistent', 'Underwriter', 'Utbyggingssjef', 'Utenrikskorrespondent', 'Utenriksredaktør', 'Utenriksråd', 'Utmarkstekniker', 'Utreder', 'Utredningsingeniør', 'Utrykningsleder', 'Utstyrsoperatør', 'Utviklingsdirektør', 'Utviklingssjef',
        'Va-Ingeniør', 'Vakt', 'Vaktbetjent', 'Vaktmann', 'Vaktmesterassistent', 'Valutakoordinator', 'Valutasjef', 'Vannverkssjef', 'Varabrannmester', 'Vareautomatoperatør', 'Varemegler', 'Varmebehandler', 'Vaskeriassistent', 'Vedlikeholdsingeniør', 'Vedlikeholdstekniker', 'Vegvalsekjører', 'Vekterlærling', 'Vektkontrollør', 'Velferdssekretær', 'Velferdssjef', 'Verftssjef', 'Verkstedansvarlig', 'Verkstedarbeider', 'Verkstedformann', 'Verkstedingeniør', 'Verkstedmedarbeider', 'Verkstedsjef', 'Verktøyinnstiller', 'Verktøykonstruktør', 'Verktøymaker', 'Verktøysliper', 'Verneingeniør', 'Verneombud', 'Vervet', 'Veterinærinspektør', 'Vever', 'Vikarbyråkonsulent', 'Viltforvalter', 'Viltkonsulent', 'Vinduspusser', 'Viseadmiral', 'Visekonsernsjef', 'Visekonsul', 'Visesanger', 'Voksenopplæringssjef', 'Vraker', 'Vytnesjæjja', 'Værelsesbetjent', 'Værvarslingssjef',
        'Web-Publisher', 'Webdesigner', 'Webmaster', 'Webredaktør',
        'Yrkesfaglærer', 'Yrkesopplæringsleder', 'Yster',
        'Økonom', 'Økonomiarbeider',
        'Øre-Nese-Hals-Spesialist',
    ];
}
