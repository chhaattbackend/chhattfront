@extends('layouts.master')

@section('style')
    {{-- <title>Browse the Best Real Estate Agencies in Karachi Pakistan | Chhatt.com</title>
    <meta name="title" content="Browse the Best Real Estate Agencies in Karachi Pakistan | Chhatt.com">

    <meta name="description"
        content="Get in touch with the best real estate agencies in Karachi. And Choose yourbest properties like houses, flats, villas and commercial properties at Chhatt.com"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="./styles/agency/agency.css" /> --}}
<link rel="stylesheet" href="{{ asset('styles/agency/agentlist.css') }}">
@endsection

@section('headercontent')
    <div class="mn_divz">
        <div class="backgz">
            <div class="backg_sdivz">
                <h1 class="fw-bolder">Find the Best Real Estate Agencies</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="bestProperty" class="propertylist mapCardContainer mt-4">
        <h6 class="text-end fw-bold">Showing 2206 Results</h6>
        <br />
        <!--  property slider -->

        <!-- PROPERTY CARD START -->
        <div class="mapCardContainer">
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,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"
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <div class="col-sm-4 col-lg-3 mb-4">
                        <!-- property card start -->
                        <div class="propertyCard1 p-2">
                            <a class="text-decoration-none position-relative" href="#">
                                <div class="imageSection">
                                    <img class="slideImg"
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEBIREREPExARDxAQExISDw8PEBIQFREWFhYTFRYYHCggGBolHRUXITEhJSkrLi4uFx8zODMtNygtLjcBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYDBAcBAv/EAEIQAAIBAgIGBQcJBwUBAAAAAAABAgMRBBIFBiExQVFhcYGRoRMiUnOxssEjMjM0QkNygtEHYmOSk6LhFFOjwtIW/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AO4gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMWJxEKcXOcoxit7k0kVfSOusI3VCDm/TneEOxb34AW0HNMTrTip/eKC5QhFLvd34mstO4pff1f5rgdUBzWjrVi4/eqS5ShB+xJknhdeJr6SjCXTCTh4O/tAu4Kr/wDcUf8Aarf8f/onNFaVpYmGam92yUWrTi+lfHcBvAAAAAAAAAAAAAAAAAAAAAAAAAAARmn9LxwlLO1mlJ5YR3Xlbi+CRJlB1+xWavCmt1Ond/im7vwUe8CD0jpGriJZ6sm3wW6MVyiuBqAAAAAAAAkNBaReGrwqX82+Wa5we/u39hHgDsNDEQqLNCcZxva8ZKSvyujIULUjS0aU5UZ7FVknGXBTtaz69ncX0AAAAAAAAAAAAAAAAAAAAAAAAAco03ifK4mtPg6kkvwx81eCR1aW7ZvON9e/j1gAT2g9F069GTmnmVRpSTaaWWL6uJ7iNW5xd6cozSd8srxb6Lr/AABAAsWI1bus1OWVtXyVNtnyzIicRoutT+dTlbnHz13rcBpgG3g9HyrKTpuLlHfC9pW5q+xgagLHgcBSrLJVpyp14rba8HJeklufTsPjH6vRhCc41JeZFytKKd7cLq3sAiNHfTUvXUvfR1w5Fo/6al62n76OugAAAAAAAAAAAAAAAAAAAAAAAADlOnqHk8VWjwVWTXVLzl4M6sc+18w2TEqfCpTT/NHzX4ZQN/V2jlw8ec25vtdl4JEkYsLTy04R9GEY9ySMoAAAYq2GhP58IS/FFNmrDRFKMlOClCS4wk/Y7qxvgDy3Pbb28zFjIZqc4+lCa74szACiaKjmr0VzrUl/ejrZzXVnCXx0I8Kc6jf5E7eNjpQAAAAAAAAAAAAAAAAAAAAAAAAGLE1MsHJb1+pVdcV5bDKpbz6M1f8ABPzW125S0Y76OXUvaiBxVFVITg904uPfx7wMkXdJ80memLDXyQvvyRv15UZQAAAAAAD5zH0BE6qxy1MRXttc5U4dss0n7pcMLVcoJvft9pXNH4byVOMOKV5dMm7vxZYdH/Rx7fawNgAAAAAAAAAAAAAAAAAAAAAAAHxVScWnuasQNWDjJp8CwNEVpKnaa6Y/FgaeYXPbHiiAzHmY9ynuUDxs8bZ9ZQ0B839gufWUZQEU5NJb2T1GGWKXJEXo6nefVF/p8SUUNt+iwH2AAAAAAAAAAAAAAAAAAAAAAAAaWkMO5WcVe109qRugCvgyYinlk1yezq4GMAAAAAAAH3ShmklzdgN/R+HcW5PZdWW25vBAAAAAAAAAAAAAAAAAAAAAAAAAAAANDSdHYpLhsfVwI4n5RTTT3PYQD3tLhJx7nYAAAAAAEhoyjvm+pfFmjThmaXN2JyEFFJLclYD6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAeTlZNvclcq/lbTk+EpSfVdnlTT3+pxLpUX8hSTdSa+8nuUU/R3u/G3Lf5JbX1sDbTBq05tdXIzxqoD7B8OojDUm31AZaGItVg+EX37N5ZCq0ltRk0bp7yeJeFrvZK0qFR8VL7uXbdJ9FgLMAAAAAAAAAAAAAAAAAAAAAAAADHWrRgs05RjFb3KSil2sgcfrnhKWyMpVZcqcbr+Z2Xc2BYik69axZU8LRl5zXysk/mp/drpfHo2cSN0lr3XndUYwpLn9JU73sXcVWcm222222227tt7W2wLlqXh8tGU+M6lvyxVl4uRMOJr6ApZcLRXOmpfzed8TdlEDFlGUyZRlAx5RlMmUZQPiEdqK7rvQ2UqnTKm/ej7JFniiJ1spZsLJ+hKEv7sv/YDe1K1i/wBRHyNV/LwWxvfUguP4lx57+Zajh+HrypyjOEnGcXeMlvTLZo3X2tGyr04VF6Ufk59dtz8AOiAgdH634SrZeU8nLlVWT+75viTlOopK8WmnuaaafaB9AAAAAAAAAAAAABEY/WXC0G4zrRclscYKVRp8nlTs+sjdfdMuhSjSptqpWvdp2caa325N3S7zmgF/xn7QILZSozl01JKC7le/gQON1zxdTYpxprlTgr98rvusV4AZcRiJ1HmqTnOXOcpTfezEAwAYDA6fhYZacI+jCK7opGUw4OrnpwkvtU4S74pmDSNSo4SVFpVErptKS6uXaBuWPbEFofWONTzK1qdXdt2Qk+35r6GTLxVNb6lP+pD9QMljyxhekKK31qP9Wn+pC6V1j2+Swyz1G8qklmim/R9J+HWBYTR05C+GrL+FJ9yv8DLgpzyxVVryltrSypvoRh09Uy4as/4bj2y81e0DnQAAGfC4upSd6VScH+5OUb9dt5gAFlwWu2Lp7JOFVfvxtLvjbxuTuD/aBSeyrRqQfODjUj8H4M56AOw6O0/hsQ1GnWi5PdF3hN9Skk32EmcMTttWxramtjT5o6rqbpd4rDrO71abyTfGWzzZ9q8UwJ4AAAAAAAHK9ecV5TG1FwpxhTXZHM/GTK+b2m6mbFYh88RV7s7SNEAAAB4+B6ecez2v/AHoAAu2quLdTDqn9qm3FvlF7Yvxa7CchFJWRQtXNIeQrLM/Mn5k+S5S7H4Nl/ApuueEjCpCpFW8opZuTlG23rs/ArtjoOsWDjVw88zs6adSL32cU3btV0c+AFv1O0elB15LzpNxg3wgtja6W7rsKxo/DqpVp027Kc1Ftb9rOlUqajFRirRikkuSW4BOFyt644tqnCl9qUsz6Yx3eL8Cyykkm20kk229yS3s5zpjHeXrSqfZ+bBcoLd+vaBpAADyPxPTxb32P2/oegAAALZ+znFZcTOnwqUm/wA0GmvByKmTWp1TLjqD5ylHvpyQHWgAAAAAAAcU0n9PW9dV99msAAAAA1cV85dXxPQBkomUAAzp2C+ip+rh7qAAwab+rVvUz905wABtaK+sUfX0vfR0oADQ099VrerZzoAAYa4AHzhPtdnxNgAAAABK6q/XcP61exnoA68AAAAA/9k="
                                        alt="" />
                                </div>
                                <div class="text-dark paraContainer mt-3">
                                    <div class="mt-1">
                                        <h6 class="lightColor">Muddassir Sardar</h6>
                                        <div class="name"></div>
                                        <div class="mt-2">
                                            <strong class="mt-5">A. R. ESTATE & BUILDERS</strong>
                                        </div>
                                        <h6 class="mt-0">
                                            Total Properties:
                                            <strong>
                                                99
                                            </strong>
                                        </h6>
                                        <div class="w-100 d-flex justify-content-center mt-1">
                                            <button class="cardBtn rounded-pill px-3 mt-1">
                                                Get in touch
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- property card end -->
                    </div>
                    <!-- property card end -->
                </div>
            </div>
        </div>
    </div>
@endsection

