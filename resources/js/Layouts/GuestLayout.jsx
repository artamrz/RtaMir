import ApplicationLogo from "@/Components/ApplicationLogo";
import { Link } from "@inertiajs/react";
import Nav from "@/Components/Nav";

export default function GuestLayout({ children }) {
    return (
        <>
            <Nav />
            <div className="container-fluid bg-sandy py-5">
                <div className="mt-6 mb-5 w-full overflow-hidden mx-auto bg-dark px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
                    {children}
                </div>
            </div>
        </>
    );
}
