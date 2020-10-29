import Head from 'next/head'
import {getAllPosts} from "../lib/api";


export default function Home({allPosts}) {
  return (
    <div>
      <Head>
        <title>Next.js - Headless WP - Graphql boilerplate</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <main>
        {console.log(allPosts)}
        {allPosts?.edges.map(({node}, index) => <h1 key={index}>{node?.slug}</h1>)}
      </main>
    </div>
  )
}

export async function getStaticProps(ctx) {
  const allPosts = await getAllPosts();

  return {
    props: {
      allPosts
    },
    revalidate: 1,
  }
}
