--
-- PostgreSQL database dump
--

-- Dumped from database version 10.12
-- Dumped by pg_dump version 10.12

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: DATABASE postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: catalog; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.catalog (
    id integer NOT NULL,
    title character varying(120) NOT NULL,
    description text,
    price numeric NOT NULL
);


ALTER TABLE public.catalog OWNER TO postgres;

--
-- Name: catalog_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.catalog_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.catalog_id_seq OWNER TO postgres;

--
-- Name: catalog_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.catalog_id_seq OWNED BY public.catalog.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(50) NOT NULL,
    login character varying(50) NOT NULL,
    password_hash character varying(250) NOT NULL,
    is_admin integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: catalog id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.catalog ALTER COLUMN id SET DEFAULT nextval('public.catalog_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: catalog; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.catalog (id, title, description, price) FROM stdin;
1	Кофеварка капельная	Кофеварка капельная выполнена в элегантном стиле и создана для любителей свежего кофе. Встроенный термоблок обеспечивает качественное приготовление кофе с насыщенным ароматом и естественным вкусом. Кофейник емкостью 1.5 литра изготовлен из прозрачного стекла и оборудован ручкой из термостойкого пластика.	2599
2	Хлебопечь	Хлебопечь поможет вам в домашних условиях приготовить вкусный и ароматный хлеб.	4899
3	Миксер	Миксер представлен в серебристом корпусе и является очень мощным прибором, позволяющим быстро смешивать и взбивать продукты для кремов, безе, чтобы создать настоящий кулинарный шедевр легко. Это ручной миксер, конструкция которого предусматривает наличие удобной ручки, обеспечивающей удобное положение руки в процессе взбивания.	899
4	Кофеварка капельная	Кофеварка капельная выполнена в элегантном стиле и создана для любителей свежего кофе. Встроенный термоблок обеспечивает качественное приготовление кофе с насыщенным ароматом и естественным вкусом. Кофейник емкостью 1.5 литра изготовлен из прозрачного стекла и оборудован ручкой из термостойкого пластика.	2599
5	Хлебопечь	Хлебопечь поможет вам в домашних условиях приготовить вкусный и ароматный хлеб.	4899
6	Миксер	Миксер представлен в серебристом корпусе и является очень мощным прибором, позволяющим быстро смешивать и взбивать продукты для кремов, безе, чтобы создать настоящий кулинарный шедевр легко. Это ручной миксер, конструкция которого предусматривает наличие удобной ручки, обеспечивающей удобное положение руки в процессе взбивания.	899
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, login, password_hash, is_admin) FROM stdin;
1	admin	admin	$2y$10$G9mhZHzTIReQY3OhqebeQuF9SXqWylXwqP6ukw23MHBrm94yZTfAi	1
2	user	user	$2y$10$Y/gftkXEwWbTZPDmO5QJm.fbM/2MiOplLNLWufWpUi32k.TWKbhW2	0
\.


--
-- Name: catalog_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.catalog_id_seq', 6, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 2, true);


--
-- Name: catalog catalog_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.catalog
    ADD CONSTRAINT catalog_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

