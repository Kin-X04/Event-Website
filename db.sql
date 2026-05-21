-- Create the database
CREATE DATABASE consult
    WITH
    ENCODING = 'UTF8'
    LOCALE = 'en-US';

-- Connect to the database (this is a psql meta-command, not part of the SQL script)
-- \c connsult

-- Create tables
-- Drop existing tables if they exist
DROP TABLE IF EXISTS public.cart;
DROP TABLE IF EXISTS public.consultations;
DROP TABLE IF EXISTS public.contact;

-- Create the cart table
CREATE TABLE public.cart (
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    items jsonb NOT NULL,
    date date NOT NULL,
    "time" time without time zone NOT NULL,
    message text
);

-- Create the consultations table
CREATE TABLE public.consultations (
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    phone character varying(15) NOT NULL,
    message text NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);

-- Create the contact table
CREATE TABLE public.contact (
    name character varying(255) NOT NULL,
    phone character varying(10) NOT NULL,
    email character varying(255) NOT NULL,
    message text NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
