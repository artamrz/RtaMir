// resources/js/Components/Nav.jsx
import { Link, usePage } from "@inertiajs/react";

export default function Nav() {
    const { auth, url } = usePage().props;

    return (
        <nav className="bg-dark navbar navbar-expand-lg navbar-dark sticky-top">
            <div className="container-fluid">
                <Link className="navbar-brand" href="/">
                    <img
                        src="/img/rtamir-logo-white.png"
                        width="120"
                        height="70"
                    />
                </Link>

                <button
                    className="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                >
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav me-auto">
                        <li className="nav-item">
                            <Link className="nav-link" href="/">
                                Home
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" href="/services">
                                Services
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" href="/rlog">
                                Rlog
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" href="/about">
                                About
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" href="/contact">
                                Contact
                            </Link>
                        </li>
                    </ul>

                    <ul className="navbar-nav ms-auto">
                        {auth.user ? (
                            <li className="nav-item dropdown">
                                <a
                                    className="nav-link dropdown-toggle"
                                    href="#"
                                    data-bs-toggle="dropdown"
                                >
                                    {auth.user.name}
                                </a>
                                <ul className="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <Link
                                            className="dropdown-item"
                                            href="/dashboard"
                                        >
                                            Dashboard
                                        </Link>
                                    </li>
                                    <li>
                                        <form method="POST" action="/logout">
                                            <button
                                                type="submit"
                                                className="dropdown-item"
                                            >
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        ) : (
                            <>
                                <li className="nav-item">
                                    <a
                                        className="nav-link"
                                        data-bs-toggle="modal"
                                        data-bs-target="#LoginModal"
                                    >
                                        Login
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link" href="/register">
                                        Register
                                    </Link>
                                </li>
                            </>
                        )}
                    </ul>
                </div>
            </div>
        </nav>
    );
}
