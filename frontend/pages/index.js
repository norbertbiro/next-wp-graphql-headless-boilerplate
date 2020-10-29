import Head from 'next/head'
import LanguageSwitcher from "../components/LanguageSwitcher";

import {getAllPosts} from "../lib/api";


export default function Home({allPosts, languages}) {
  return (
    <div>
      <Head>
        <title>Next.js - Headless WP - Graphql boilerplate</title>
        <link rel="icon" href="/favicon.ico"/>
      </Head>
      <header>
        <LanguageSwitcher languages={languages}/>
      </header>
      <main>
        {allPosts?.edges.map(({node}, index) => <h1 key={index}>{node?.slug}</h1>)}
      </main>
    </div>
  )
}

export async function getStaticProps(ctx) {

  const languages = ctx.locales;
  const selectedLanguage = ctx?.locale.toUpperCase();
  const allPosts = await getAllPosts(selectedLanguage);
  console.log(allPosts.edges, '###############################')
  return {
    props: {
      allPosts,
      languages
    },
    revalidate: 1,
  }
}
