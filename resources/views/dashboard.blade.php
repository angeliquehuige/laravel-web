@extends("layout")
@section ("content")

    <h1 class="heading">Dashboard</h1>

    <div class="container">
        <div class="row">
    <div class="col-sm-4">
        <p style="margin-left: 120px; margin-top: 30px">NBSA Veilig</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="30" aria-valuemax="45"></div>
        </div>
        <p style="margin-left: 120px">Propedeuse</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="30" aria-valuemax="60"></div>
        </div>
        <div class="buttons">
        <button type="button" class="btn btn-dark" href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">Onderwijs & Examenregelement</button>
        <br><br>
        <button type="button" class="btn btn-dark" href="https://hz.nl/uploads/documents/Regelingen/OERS/2018-2019/9.-HBO-ICT-vt-Uitvoeringsregeling-HZ-2018–2019.pdf">Uitvoeringsregeling HBO-ICT</button>
        <br><br>
        <button type="button" class="btn btn-dark" href="https://learn.hz.nl">HZ Learn</button>
        <br><br>
        <button type="button" class="btn btn-dark" href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/Algemeen?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams HBO-ICT Eerstejaars </button>
        <br><br>
        <button type="button" class="btn btn-dark" href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams HBO-ICT Algemeen</button>
        <br><br>
        <button type="button" class="btn btn-dark" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Studievoortgang</button>
        <br><br>
        <button type="button" class="btn btn-dark" href="https://github.com/HZ-HBO-ICT">Github HBO-ICT</button>
        </div>
    </div>
    <div class="col-sm-7">
        <table id="studiemonitor">

            <tr>
                <th>Blok</th>
                <th>Cursus</th>
                <th>Toets</th>
                <th>Weging</th>
                <th>EC</th>
                <th>Resultaat</th>

            </tr>
            <tr>
                <td>1: Introduction to Computer Science</td>
                <td>Opleidings- en Beroepsoriëntatie</td>
                <td>Toets</td>
                <td>100%</td>
                <td>2.5</td>
                <td>7.5</td>
            </tr>
            <tr>
                <td></td>
                <td>Computer Science Basics</td>
                <td>Theorietentamen</td>
                <td>100%</td>
                <td>7.5</td>
                <td>7.9</td>
            </tr>
            <tr>
                <td></td>
                <td>Programming Basics</td>
                <td>Casustoets</td>
                <td>100%</td>
                <td>5</td>
                <td>10</td>
            </tr>
            <tr>
                <td>2: Game Development</td>
                <td>Object-oriented Programming</td>
                <td>Casustoets</td>
                <td>50%</td>
                <td>5</td>
                <td>5.8</td>
            </tr>
            <tr>
                <td></td>
                <td>Object-oriented Programming</td>
                <td>Groepsproject</td>
                <td>50%</td>
                <td>5</td>
                <td>7.0</td>
            </tr>
            <tr>
                <td></td>
                <td>Professional Skills 1</td>
                <td>Rapportage</td>
                <td>50%</td>
                <td>5</td>
                <td>9.3</td>
            </tr>
            <tr>
                <td></td>
                <td>Hogeschooltaal</td>
                <td>Toets</td>
                <td>50%</td>
                <td>0</td>
                <td>Behaald</td>
            </tr>
            <tr>
                <td>3: Frameworks 1</td>
                <td>Professional Skills 2</td>
                <td>Agile functioneren</td>
                <td>50%</td>
                <td>2.5</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Engels opdrachten</td>
                <td>25%</td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Engels werkstuk</td>
                <td>25%</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Professionele Werkplek</td>
                <td>Eindgesprek</td>
                <td>100%</td>
                <td>2.5</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Framework Development 1</td>
                <td>Casustoets</td>
                <td>100%</td>
                <td>5</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Framework Project 1</td>
                <td>Requirementsverslag</td>
                <td>50%</td>
                <td>5</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Projectresultaat</td>
                <td>50%</td>
                <td></td>
                <td></td>
            </tr>
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Professional Skills 3</td>--}}
{{--                <td>Agile functioneren</td>--}}
{{--                <td>50%</td>--}}
{{--                <td>2.5</td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td>Engels opdrachten</td>--}}
{{--                <td>25%</td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td>Engels werkstuk</td>--}}
{{--                <td>25%</td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Framework Development 2</td>--}}
{{--                <td>Opdrachten</td>--}}
{{--                <td>100%</td>--}}
{{--                <td>5</td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Framework Project 2</td>--}}
{{--                <td>Code reviews</td>--}}
{{--                <td>50%</td>--}}
{{--                <td>5</td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td>Projectresultaat</td>--}}
{{--                <td>50%</td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>HZ Personality</td>--}}
{{--                <td>Portfolio</td>--}}
{{--                <td>100%</td>--}}
{{--                <td>2.5</td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>IT Personality 1</td>--}}
{{--                <td>Portfolio</td>--}}
{{--                <td>100%</td>--}}
{{--                <td>2.5</td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
        </table>


    </div>
    </div>
    </div>

@endsection
